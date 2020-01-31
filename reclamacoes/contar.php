<?php
//inicializando a variavel de controle nova (se existe nova entao true)
$nova = false;
//Conectando com o banco
$Conn = new Conn;
$Qry = new Qry;
$c = $Conn->connect(HOST, USER, PASS, DB);
// Incompletas
// Foi iniciada no app mas o ususario não completou seu cadastro
$s = "SELECT " . PFIX . "reclamacao.indice, " . PFIX . "reclamacao.time_procon  FROM " . PFIX . "reclamacao WHERE " . PFIX . "reclamacao.status = 0 AND " . PFIX . "reclamacao.uid = '$uid'";
$r = $Qry->query($s);
$l = $Qry->rows($r);
$msg[214]['results']['incompleta']['code'] = 0;
$msg[214]['results']['incompleta']['qtde'] = $l;
//verificando se existem novidade no processo
if($l){
    $d = $Qry->arr($r);
    for($i=0;$i<count($d);$i++){
        $ind_reclamacao = $d[$i]['indice'];
        $tme_procon     = $d[$i]['time_procon'];
        $ss = "SELECT indice FROM ".PFIX."reclamacao_processo_view WHERE ind_reclamacao = '$ind_reclamacao' AND uid = '$uid' AND time > '$tme_procon' ORDER BY indice DESC LIMIT 0, 1 ";
        $rr = $Qry->query($ss);
        $ll = $Qry->rows($rr);
        $nova = $ll ? $nova : true;
        $msg[214]['results']['incompleta']['nova'] = $nova;
    }
}
// Espera
// Foi iniciada no app mas não foi recepcionada pelo Procon
$s = "SELECT " . PFIX . "reclamacao.indice, " . PFIX . "reclamacao.time_procon  FROM " . PFIX . "reclamacao WHERE " . PFIX . "reclamacao.status = 1 AND " . PFIX . "reclamacao.uid = '$uid'";
$r = $Qry->query($s);
$l = $Qry->rows($r);
$msg[214]['results']['espera']['code'] = 1;
$msg[214]['results']['espera']['qtde'] = $l;
//verificando se existem novidade no processo
if($l){
    $d = $Qry->arr($r);
    for($i=0;$i<count($d);$i++){
        $ind_reclamacao = $d[$i]['indice'];
        $tme_procon     = $d[$i]['time_procon'];
        $ss = "SELECT indice FROM ".PFIX."reclamacao_processo_view WHERE ind_reclamacao = '$ind_reclamacao' AND uid = '$uid' AND time > '$tme_procon' ORDER BY indice DESC LIMIT 0, 1 ";
        $rr = $Qry->query($ss);
        $ll = $Qry->rows($rr);
        $nova = $ll ? $nova : true;
        $msg[214]['results']['espera']['nova'] = $nova;
    }
}
// Aberta
// Foi recebida pelo procon mas esta aguardando ser preocessada
$s = "SELECT " . PFIX . "reclamacao.indice, " . PFIX . "reclamacao.time_procon  FROM " . PFIX . "reclamacao WHERE " . PFIX . "reclamacao.status = 11 AND " . PFIX . "reclamacao.uid = '$uid'";
$r = $Qry->query($s);
$l = $Qry->rows($r);
$msg[214]['results']['aberta']['code'] = 11;
$msg[214]['results']['aberta']['qtde'] = $l;
//verificando se existem novidade no processo
if($l){
    $d = $Qry->arr($r);
    for($i=0;$i<count($d);$i++){
        $ind_reclamacao = $d[$i]['indice'];
        $tme_procon     = $d[$i]['time_procon'];
        $ss = "SELECT indice FROM ".PFIX."reclamacao_processo_view WHERE ind_reclamacao = '$ind_reclamacao' AND uid = '$uid' AND time > '$tme_procon' ORDER BY indice DESC LIMIT 0, 1 ";
        $rr = $Qry->query($ss);
        $ll = $Qry->rows($rr);
        $nova = $ll ? $nova : true;
        $msg[214]['results']['aberta']['nova'] = $nova;
    }
}
// Pendentes
// Foi recebida pelo procon mas devolvida para à origem/usuário para correção ou mais informação
$s = "SELECT " . PFIX . "reclamacao.indice, " . PFIX . "reclamacao.time_procon  FROM " . PFIX . "reclamacao WHERE " . PFIX . "reclamacao.status = 21 AND " . PFIX . "reclamacao.uid = '$uid'";
$r = $Qry->query($s);
$l = $Qry->rows($r);
$msg[214]['results']['pendente']['code'] = 21;
$msg[214]['results']['pendente']['qtde'] = $l;
//verificando se existem novidade no processo
if($l){
    $d = $Qry->arr($r);
    for($i=0;$i<count($d);$i++){
        $ind_reclamacao = $d[$i]['indice'];
        $tme_procon     = $d[$i]['time_procon'];
        $ss = "SELECT indice FROM ".PFIX."reclamacao_processo_view WHERE ind_reclamacao = '$ind_reclamacao' AND uid = '$uid' AND time > '$tme_procon' ORDER BY indice DESC LIMIT 0, 1 ";
        $rr = $Qry->query($ss);
        $ll = $Qry->rows($rr);
        $nova = $ll ? $nova : true;
        $msg[214]['results']['pendente']['nova'] = $nova;
    }
}
// Em Processamento
// Foi recebida pelo procon e esta em processamento
$s = "SELECT " . PFIX . "reclamacao.indice, " . PFIX . "reclamacao.time_procon  FROM " . PFIX . "reclamacao WHERE " . PFIX . "reclamacao.status = 31 AND " . PFIX . "reclamacao.uid = '$uid'";
$r = $Qry->query($s);
$l = $Qry->rows($r);
$msg[214]['results']['processamento']['code'] = 31;
$msg[214]['results']['processamento']['qtde'] = $l;
//verificando se existem novidade no processo
if($l){
    $d = $Qry->arr($r);
    for($i=0;$i<count($d);$i++){
        $ind_reclamacao = $d[$i]['indice'];
        $tme_procon     = $d[$i]['time_procon'];
        $ss = "SELECT indice FROM ".PFIX."reclamacao_processo_view WHERE ind_reclamacao = '$ind_reclamacao' AND uid = '$uid' AND time > '$tme_procon' ORDER BY indice DESC LIMIT 0, 1 ";
        $rr = $Qry->query($ss);
        $ll = $Qry->rows($rr);
        $nova = $ll ? $nova : true;
        $msg[214]['results']['processamento']['nova'] = $nova;
    }
}// Recusada
// Foi recebida pelo procon mas contem erros que impedem a abertura de processo
$s = "SELECT " . PFIX . "reclamacao.indice, " . PFIX . "reclamacao.time_procon  FROM " . PFIX . "reclamacao WHERE " . PFIX . "reclamacao.status = 51 AND " . PFIX . "reclamacao.uid = '$uid'";
$r = $Qry->query($s);
$l = $Qry->rows($r);
$msg[214]['results']['recusada']['code'] = 51;
$msg[214]['results']['recusada']['qtde'] = $l;
//verificando se existem novidade no processo
if($l){
    $d = $Qry->arr($r);
    for($i=0;$i<count($d);$i++){
        $ind_reclamacao = $d[$i]['indice'];
        $tme_procon     = $d[$i]['time_procon'];
        $ss = "SELECT indice FROM ".PFIX."reclamacao_processo_view WHERE ind_reclamacao = '$ind_reclamacao' AND uid = '$uid' AND time > '$tme_procon' ORDER BY indice DESC LIMIT 0, 1 ";
        $rr = $Qry->query($ss);
        $ll = $Qry->rows($rr);
        $nova = $ll ? $nova : true;
        $msg[214]['results']['recusada']['nova'] = $nova;
    }
}
// Finalizada
// Fluxo completo no procon
$s = "SELECT " . PFIX . "reclamacao.indice, " . PFIX . "reclamacao.time_procon  FROM " . PFIX . "reclamacao WHERE " . PFIX . "reclamacao.status = 91 AND " . PFIX . "reclamacao.uid = '$uid'";
$r = $Qry->query($s);
$l = $Qry->rows($r);
$msg[214]['results']['finalizada']['code'] = 91;
$msg[214]['results']['finalizada']['qtde'] = $l;
//verificando se existem novidade no processo
if($l){
    $d = $Qry->arr($r);
    for($i=0;$i<count($d);$i++){
        $ind_reclamacao = $d[$i]['indice'];
        $tme_procon     = $d[$i]['time_procon'];
        $ss = "SELECT indice FROM ".PFIX."reclamacao_processo_view WHERE ind_reclamacao = '$ind_reclamacao' AND uid = '$uid' AND time > '$tme_procon' ORDER BY indice DESC LIMIT 0, 1 ";
        $rr = $Qry->query($ss);
        $ll = $Qry->rows($rr);
        $nova = $ll ? $nova : true;
        $msg[214]['results']['finalizada']['nova'] = $nova;
    }
}// Cancelada
// Cancelada pelo usuario
$s = "SELECT " . PFIX . "reclamacao.indice, " . PFIX . "reclamacao.time_procon  FROM " . PFIX . "reclamacao WHERE " . PFIX . "reclamacao.status = 99 AND " . PFIX . "reclamacao.uid = '$uid'";
$r = $Qry->query($s);
$l = $Qry->rows($r);
$msg[214]['results']['cancelada']['code'] = 99;
$msg[214]['results']['cancelada']['qtde'] = $l;
//verificando se existem novidade no processo
//Canceladas nao tem mais acao do procon nao verificar
$msg[214]['results']['cancelada']['nova'] = false;
// Total
// Soma de todas os status
$msg[214]['results']['registro']['code'] = 100;
$msg[214]['results']['registro']['qtde'] = $msg[214]['results']['incompleta']['qtde'] + $msg[214]['results']['espera']['qtde'] + $msg[214]['results']['aberta']['qtde'] + $msg[214]['results']['pendente']['qtde'] + $msg[214]['results']['processamento']['qtde'] + $msg[214]['results']['recusada']['qtde'] + $msg[214]['results']['finalizada']['qtde'] + $msg[214]['results']['cancelada']['qtde'];
//informacao se existe novidades no processo
$msg[214]['novas'] = $nova ? true : false;

$output = $msg[214];

//Desconectando o banco
$Conn->desconnect($c);
