<?php
//Conectando com o banco
$Conn = new Conn;
$Qry  = new Qry; 
$c = $Conn->connect(HOST,USER,PASS,DB);
if($code==99){
    $s ="SELECT  
	".PFIX."reclamacao.indice AS uid,
	".PFIX."reclamacao.status,
	".PFIX."reclamacao.mensagem,
	".PFIX."reclamacao.time_procon,
	".PFIX."reclamacao.ind_estabelecimento,
	".PFIX."reclamacao.ind_tipo,
	".PFIX."reclamacao.tabela_reclamacao,
	".PFIX."reclamacao.time,
	from_unixtime(".PFIX."reclamacao.time) AS data_registro 
	FROM 
	".PFIX."reclamacao
	WHERE 
	".PFIX."reclamacao.uid = '$uid'";
}else{
    $s ="SELECT 
        ".PFIX."reclamacao.indice AS uid,
	".PFIX."reclamacao.status,
	".PFIX."reclamacao.mensagem,
	".PFIX."reclamacao.time_procon,
	".PFIX."reclamacao.ind_estabelecimento,
	".PFIX."reclamacao.ind_tipo,
	".PFIX."reclamacao.tabela_reclamacao,
	".PFIX."reclamacao.time,
	from_unixtime(".PFIX."reclamacao.time) AS data_registro 
	FROM 
	".PFIX."reclamacao
	WHERE 
	".PFIX."reclamacao.status = '$code'
	AND
	".PFIX."reclamacao.uid = '$uid'";
}
$r = $Qry->query($s);
$l = $Qry->rows($r);
//$msg[216]['results']['sql'] = $s;
$msg[216]['results']['code'] = $code;
$msg[216]['results']['qtde'] = $l;
//variavel de controle - verifica se tem alguma reclamacao nova
$tem_nova = false;
$d = $Qry->arr($r);
/**/
for($i = 0; $i<count($d);$i++){
    $ind_reclamacao = $d[$i]['uid'];
    $tme_procon     = $d[$i]['time_procon'];
    $msg[216]['results']['list'][$i]['uid'] = $d[$i]['uid'];
    $status = $d[$i]['status'];
    //pegando o status
    $ss  = "SELECT status, descricao FROM ".PFIX."base_reclamacao_status WHERE indice = '$status'";
    $rr  = $Qry->query($ss);
    $dd = $Qry->arr($rr);
    $msg[216]['results']['list'][$i]['status'] = $dd[0]['status'];
    $msg[216]['results']['list'][$i]['status_descricao'] = utf8_encode($dd[0]['descricao']) .' '. utf8_encode($d[$i]['mensagem']);                
    if($status==51){
        //recusada pegar a mensagem do atendente
        $sss  = "SELECT mensagem FROM ".PFIX."reclamacao_recusa WHERE ind_reclamacao = '$ind_reclamacao' ORDER BY indice DESC LIMIT 0, 1";
        $rrr  = $Qry->query($sss);
        $ddd = $Qry->arr($rrr);
        $msg[216]['results']['list'][$i]['status_descricao'] = utf8_encode($dd[0]['descricao']) .', '. utf8_encode($ddd[0]['mensagem']);                
    }
    $msg[216]['results']['list'][$i]['data_registro'] = $d[$i]['data_registro'];
    $ind_estabelecimento = $d[$i]['ind_estabelecimento'];
    //verificando o estabelecimento
    $ss  = "SELECT estabelecimento FROM ".PFIX."base_reclamacao_estabelecimento WHERE indice = '$ind_estabelecimento'";
    $rr  = $Qry->query($ss);
    $dd = $Qry->arr($rr);
    $msg[216]['results']['list'][$i]['estabelecimento'] = $dd[0]['estabelecimento'];
    //Detalhes da reclamacao
    $indice = $d[$i]['uid'];
    $ss = "	SELECT queixa FROM ".PFIX."reclamacao_queixa WHERE ind_reclamacao = '$indice' ";
    $rr = $Qry->query($ss);
    $dd = $Qry->arr($rr);
    $msg[216]['results']['list'][$i]['queixa'] = $dd[0]['queixa'];
    //Verificando se houve alteracao desde da ultima visualização - novas
    $s = "SELECT indice FROM ".PFIX."reclamacao_processo_view WHERE ind_reclamacao = '$ind_reclamacao' AND uid = '$uid' AND time > '$tme_procon' ORDER BY indice DESC LIMIT 0, 1 ";
    $r = $Qry->query($s);
    $l = $Qry->rows($r);
    $msg[216]['results']['list'][$i]['nova'] = $l ? false : true;
    if(!$tem_nova && $l){
        $tem_nova = true;
    }
    $msg[216]['results']['nova'] = $tem_nova;
}
$output = $msg[216];
$Conn->desconnect($c);