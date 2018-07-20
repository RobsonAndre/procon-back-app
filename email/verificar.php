<?php

if ($email) {
    //Connect
    $Conn = new Conn;
    $Qry = new Qry;
    $c = $Conn->connect(HOST, USER, PASS, DB);
    //verificando se o E-mail esta cadastrado
    $s = "SELECT indice, uid, nome FROM " . PFIX . "user_login WHERE email='$email' ";
    $r = $Qry->query($s);
    $l = $Qry->rows($r);
    if ($l) {
        $d = $Qry->arr($r);
        $uid  = $d[0]['uid'];
        $nome = $d[0]['nome'];
        if(emailVerifica($uid, $email, $nome)){
            $output = $msg[150];    
        }else{
            $output = $msg[151];
        }
        
    }else{
        $output = $msg[152];
    }
    //Desconectando o banco
    $Conn->desconnect($c);
    
} else {
    $output = $msg[151];
}