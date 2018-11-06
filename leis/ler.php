<?php

if ($id) {
    //Conectando
    $Conn = new Conn;
    $Qry = new Qry;
    $c = $Conn->connect(HOST, USER, PASS, DB);
    $s = "SELECT status, versao, numero, ano, tipo, dominio, uf, municipio, titulo, descricao, texto, time FROM " . PFIX . "leis WHERE indice = '$id' ";
    $r = $Qry->query($s);
    $l = $Qry->rows($r);
    
    if($l){
        $d = $Qry->arr($r);
        $msg[142]['lei']['status']    = $d[0]['status'];
        $msg[142]['lei']['versao']    = $d[0]['versao'];
        $msg[142]['lei']['numero']    = $d[0]['numero'];
        $msg[142]['lei']['ano']       = $d[0]['ano'];
        $msg[142]['lei']['tipo']      = nl2br(utf8_encode($d[0]['tipo']));
        $msg[142]['lei']['dominio']   = nl2br(utf8_encode($d[0]['dominio']));
        $msg[142]['lei']['uf']        = nl2br(utf8_encode($d[0]['uf']));
        $msg[142]['lei']['municipio'] = nl2br(utf8_encode($d[0]['municipio']));
        $msg[142]['lei']['titulo']    = nl2br(utf8_encode($d[0]['titulo']));
        $msg[142]['lei']['descricao'] = nl2br(utf8_encode($d[0]['descricao']));
        $msg[142]['lei']['texto']     = nl2br(utf8_encode($d[0]['texto']));
        $msg[142]['lei']['time']      = $d[0]['time'];

        $output = $msg[142];
    }else{
        
        $msg[141]['info'] = "Lei não encontrada com o id: " . $id;
        $output = $msg[141];
        
    }
    $Conn->desconnect($c);
    
} else {
    $msg[141]['info'] = "Id da Lei não informado";
    $output = $msg[141];
}