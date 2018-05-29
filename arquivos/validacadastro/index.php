<?php

include("../config/config.php");

$arr = explode('-', base64_decode(filter_input(INPUT_GET, 'token', FILTER_SANITIZE_STRING)));
$time = base64_decode($arr[0]);
$uid = base64_decode($arr[1]);
$emailCod = $arr[2];
$email = filter_input(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL);
$agora = time();

if ($emailCod === sha1($email)) {
    //atualizando a base de dados
    $Conn = new Conn;
    $Qry = new Qry;
    $c = $Conn->connect(HOST, USER, PASS, DB);

    $s = "UPDATE " . PFIX . "user_login SET verificado = '$agora' WHERE email='$email' AND uid = '$uid' ";
    $r = $Qry->query($s);
    if ($r) {
        echo "Sucesso: Cadastro validado.";
    } else {
        echo "Erro: não foi possível validar seu cadastro, tente mais tarde.";
    }
} else {
    //echo "Erro: email nao confere!";
    echo "Erro: token invalido.";
}