<?php
//Conectando
$Conn = new Conn;
$Qry = new Qry;
$c = $Conn->connect(HOST, USER, PASS, DB);
$s = "SELECT uf_id, uf_nome, uf_uf, uf_ddd FROM " . PFIX . "estado WHERE uf_id > 0 ";
    
$r = $Qry->query($s);

$l = $Qry->rows($r);
if ($l) {
    
    $msg[180]['qtde'] = $l;
    $arr = $Qry->arr($r);
    for($i=0;$i<count($arr);$i++){
        $msg[180]['results'][$i]['id']    = $arr[$i]['uf_id'];
        $msg[180]['results'][$i]['uf']    = utf8_encode($arr[$i]['uf_nome']);
        $msg[180]['results'][$i]['sigla'] = $arr[$i]['uf_uf'];
        $ddd = explode(',',$arr[$i]['uf_ddd']);
        sort($ddd);
        $msg[180]['results'][$i]['ddd'] = $ddd;
    }
    $output = $msg[180];

}else{

    $output = $msg[181];
    
}
    
$Conn->desconnect($c);
