<?php

//Conectando com o banco
$Conn = new Conn;
$Qry = new Qry;
$c = $Conn->connect(HOST, USER, PASS, DB);

if ($email) {
    //Verificando se o email esta cadastrado
    $s = "SELECT uid, nome, email FROM " . PFIX . "user_login WHERE email='$email' ";
} elseif ($cpf) {
    //Verificando se o cpf esta cadastrado
    $s = "SELECT uid, nome, email FROM " . PFIX . "user_login WHERE cpf='$cpf' ";
}

$r = $Qry->query($s);
$l = $Qry->rows($r);

if ($l == 1) {
    $arr = $Qry->arr($r);
    if (redefinirSenha($arr[0]['uid'], $arr[0]['email'], $arr[0]['nome'])) {
        $msg[130]['status_message'] = 'Sucesso: Foi enviado um e-mail para "' . $arr[0]['email'] . '" com as instruções para redefinir a senha.';
        $output = $msg[130];
    } else {
        $output = $msg[132];
    }
} else {
    $output = $msg[131];
}

//Desconectando o banco
$Conn->desconnect($c);
