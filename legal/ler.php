<?php

if ($tipo) {
    //Conectando
    $Conn = new Conn;
    $Qry = new Qry;
    $c = $Conn->connect(HOST, USER, PASS, DB);
    if ($tipo == 'politica') {
        $s = "SELECT versao, texto, time FROM " . PFIX . "politica WHERE status = 1 ";
    } else {
        $s = "SELECT versao, texto, time FROM " . PFIX . "termo WHERE status = 1 ";
    }
    
    $r = $Qry->query($s);
    
    if ($r) {
        $d = $Qry->arr($r);
        $msg[140]['results']['tipo']   = $tipo;
        $msg[140]['results']['versao'] = $d[0]['versao'];
        $msg[140]['results']['data']   = date('d-m-Y',$d[0]['time']);
        $msg[140]['results']['texto']  = $d[0]['texto'];
    }
    
    $output = $msg[140];
} else {
    $output = $msg[141];
}