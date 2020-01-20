<?php

//Conectando com o banco
$Conn = new Conn;
$Qry = new Qry;
$c = $Conn->connect(HOST, USER, PASS, DB);
//Pegando a Reclamacao
$s ="SELECT 
    " . PFIX . "reclamacao.indice AS uid,
    " . PFIX . "reclamacao.status,
    " . PFIX . "reclamacao.mensagem,
    " . PFIX . "reclamacao.protocolo,
    " . PFIX . "reclamacao.ind_estabelecimento,
    " . PFIX . "reclamacao.ind_tipo,
    " . PFIX . "reclamacao.usr_procon,
    " . PFIX . "reclamacao.time_procon,
    " . PFIX . "reclamacao.tabela_reclamacao,
    from_unixtime(" . PFIX . "reclamacao.time) AS data_registro,
    " . PFIX . "reclamacao.time
    FROM 
    " . PFIX . "reclamacao
    WHERE 
    " . PFIX . "reclamacao.indice = '$reclamacao'
    AND    
    " . PFIX . "reclamacao.uid = '$uid'";
$r = $Qry->query($s);
$l = $Qry->rows($r);
if ($l) {
    $d = $Qry->arr($r);
    /**/
    $msg[218]['results']['uid'] = $d[0]['uid'];
    $status = $d[0]['status'];
    $mensagem = $d[0]['mensagem'];
    //Pegando  o status e a descricao do status
    $ss = "SELECT status, descricao FROM " . PFIX . "base_reclamacao_status WHERE indice = '$status'";
    $rr = $Qry->query($ss);
    $dd = $Qry->arr($rr);
    $msg[218]['results']['status']           = $dd[0]['status'];
    $msg[218]['results']['status_code']      = $d[0]['status'];
    $msg[218]['results']['status_descricao'] = utf8_encode($dd[0]['descricao']) .' '. utf8_encode($mensagem);
    $msg[218]['results']['protocolo']        = $dd[0]['protocolo'];
    //Peganda data da alteracao do procon no processo 
    //Ultima alteracao do procon no processo
    $usr_procon = $d[0]['usr_procon'];
    $tme_procon = $d[0]['time_procon'];
    //Pegando os anexos do Procon
    $sss = "SELECT file, name FROM " . PFIX . "reclamacao_processo_anexos WHERE ind_reclamacao = '$reclamacao' AND ind_usr = '$usr_procon' AND time = '$tme_procon' ";
    $rrr = $Qry->query($sss);
    $lll = $Qry->rows($rrr);
    $ddd = $Qry->arr($rrr);
    $msg[218]['results']['procon_anexo'] = $lll;
    $msg[218]['results']['procon_file']  = $ddd[0]['file'];
    $msg[218]['results']['anexos_name']  = utf8_encode($ddd[0]['name']);
    //$status == 51 (foi recusada)
    if ($status == 51) {
        //recusada pegar a mensagem do atendente
        $sss = "SELECT mensagem FROM " . PFIX . "reclamacao_recusa WHERE ind_reclamacao = '$reclamacao' ORDER BY indice DESC LIMIT 0, 1";
        $rrr = $Qry->query($sss);
        $ddd = $Qry->arr($rrr);
        $msg[218]['results']['status_descricao'] = utf8_encode($dd[0]['descricao']) . ' ' . utf8_encode($ddd[0]['mensagem']);
    }
    $msg[218]['results']['data_registro'] = $d[0]['data_registro'];
    $ind_estabelecimento = $d[0]['ind_estabelecimento'];
    //verificando o estabelecimento
    $s = "SELECT estabelecimento FROM " . PFIX . "base_reclamacao_estabelecimento WHERE indice = '$ind_estabelecimento'";
    $r = $Qry->query($s);
    $dd = $Qry->arr($r);
    $msg[218]['results']['estabelecimento'] = $dd[0]['estabelecimento'];
    //verificando a reclamacao
    $ind_tipo = $d[0]['ind_tipo'];
    $s = "SELECT tipo FROM " . PFIX . "base_reclamacao_tipo WHERE indice = '$ind_tipo'";
    $r = $Qry->query($s);
    $dd = $Qry->arr($r);
    $msg[218]['results']['reclamacao'] = utf8_encode($dd[0]['tipo']);
    //Detalhes da reclamacao
    $indice = $d[0]['uid'];
    $s = "SELECT queixa FROM " . PFIX . "reclamacao_queixa WHERE ind_reclamacao = '$indice' ";
    $r = $Qry->query($s);
    $d = $Qry->arr($r);
    $msg[218]['results']['queixa'] = $d[0]['queixa'];
    //Anexos da reclamacao
    $s = "SELECT anexo FROM " . PFIX . "reclamacao_anexos WHERE ind_reclamacao = '$indice' ";
    $r = $Qry->query($s);
    $d = $Qry->arr($r);
    for ($j = 0; $j < count($d); $j++) {
        $msg[218]['results']['anexos'][$j] = $d[$j]['anexo'];
    }
    //verificando se o conteudo ja foi visualizado depois da ultina ateracao do procon
    $s = "SELECT indice FROM ".PFIX."reclamacao_processo_view WHERE ind_reclamacao = '$reclamacao' AND uid = '$uid' AND time > '$tme_procon' ORDER BY indice DESC LIMIT 0, 1 ";
    $r = $Qry->query($s);
    $l = $Qry->rows($r);
    $msg[218]['results']['nova'] = $l ? false : true;
    //registrando a visualização do conteudo pelo usuário
    $s = "INSERT INTO ".PFIX."reclamacao_processo_view (ind_reclamacao, uid, time)  VALUES ('$reclamacao', '$uid', '$time') ";
    $r = $Qry->query($s);
    
    $output = $msg[218];
} else {
    $output = $msg[219];
}
//Desconectando o banco
$Conn->desconnect($c);
