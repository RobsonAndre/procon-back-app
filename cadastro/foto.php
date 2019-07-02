<?php
//valida nome completo
if (!$imagem) {
    $msg[331]['info'] = 'Foto invalida ou em branco.';
    $output = $msg[331];
}else{
    $Conn = new Conn;
    $Qry = new Qry;
    $c = $Conn->connect(HOST, USER, PASS, DB);
    //verificando se o E-mail já não esta cadastrado
    $s = "SELECT indice FROM " . PFIX . "user_foto WHERE uid='$uid' ";
    $r = $Qry->query($s);
    $l = $Qry->rows($r);
    if ($l) {
        //Update
        $ss = "UPDATE " . PFIX . "user_foto SET foto='$imagem', time='$time' WHERE uid = '$uid' ";
        $msg[330]['info'] = 'Foto atualizada com sucesso.';
    }else{
        //Insert
        $ss = "INSERT INTO " . PFIX . "user_foto (uid, foto, time) VALUES ('$uid', '$imagem', '$time') ";
        $msg[330]['info'] = 'Foto cadastrada com sucesso.';
    }
    $rr = $Qry->query($ss);
    $output = $msg[330];
    //Desconectando o banco
    $Conn->desconnect($c);
}

