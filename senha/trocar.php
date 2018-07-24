<?php

//Conectando com o banco
$Conn = new Conn;
$Qry = new Qry;
$c = $Conn->connect(HOST, USER, PASS, DB);

if ($nsenha) {
    if ($nsenha !== $senha) {
        //verificando se o email e senha conferem
        $s = "SELECT uid, nome, cpf, email, verificado FROM " . PFIX . "user_login WHERE email='$email' AND senha='$senha' ";

        $r = $Qry->query($s);
        $l = $Qry->rows($r);

        if ($l == 1) {
            //email e senha conferem
            $arr = $Qry->arr($r);
            $uid = $arr[0]['uid'];
            $s = "UPDATE " . PFIX . "user_login SET senha = '$nsenha' WHERE uid='$uid' ";
            $r = $Qry->query($s);

            $output = $msg[160];
        } else {
            //email e senha NAO conferem
            $output = $msg[161];
        }
    } else {
        $output = $msg[163]; 
    }
} else {
    $output = $msg[162];
}
//Desconectando o banco
$Conn->desconnect($c);
