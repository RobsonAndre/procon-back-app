<?php

$Conn = new Conn;
$Qry  = new Qry;

$c = $Conn->connect(HOST, USER, PASS, DB);
$s = "SELECT versao, numero, ano, tipo, dominio, uf, municipio, titulo, descricao, time FROM " . PFIX . "leis WHERE status = 1 ORDER BY ano, numero";
$r = $Qry->query($s);
$l = $Qry->rows($r);
$msg[170]['pagina'] = 1;
$msg[170]['qtde'] = $l;
if ($r) {
    $arr = $Qry->arr($r);
    for($i=0;$i<count($arr);$i++){
        $array[$i]['versao']     = $arr[$i]['versao'];
        $array[$i]['numero']     = $arr[$i]['numero'];
        $array[$i]['ano']        = $arr[$i]['ano'];
        $array[$i]['tipo']       = utf8_encode($arr[$i]['tipo']);
        $array[$i]['dominio']    = utf8_encode($arr[$i]['dominio']);
        $array[$i]['uf']         = utf8_encode($arr[$i]['uf']);
        $array[$i]['municipio']  = utf8_encode($arr[$i]['municipio']);
        $array[$i]['titulo']     = utf8_encode($arr[$i]['titulo']);
        $array[$i]['descricao']  = utf8_encode($arr[$i]['descricao']);
        $array[$i]['modificado'] = $arr[$i]['time'];
    }
    $msg[170]['results'] = $array;
    
    $output = $msg[170];
} else {
    $output = $msg[171];
}

$Conn->desconnect($c);