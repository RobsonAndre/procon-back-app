﻿<?php
include("../config/config.php");

/* echo '<br>'. */$limite = (60 * 60); //1h
/* echo '<br>'. */$agora  = time();
/* echo '<br>'. */$tk     = filter_input(INPUT_POST, 'token', FILTER_SANITIZE_STRING);
/* echo '<br>'. */$token  = explode('-', base64_decode($tk));
/* echo '<br>'. */$email  = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
/* echo '<br>'. */$senha1 = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
/* echo '<br>'. */$senha2 = filter_input(INPUT_POST, 'repetir', FILTER_SANITIZE_STRING);
/* echo '<br>'. */$senha  = $senha1 === $senha2 ? validaSenha($senha1) : false;
if (!$senha) {
    echo '<br />Erro: Senha invalida, a senha deve conter de 8 a 15 caracteres.';
    echo '<br /><a href="#" onClick="javascript:history.go(-1)">Tentar novamente</a>';
    die();
}
/** /
    echo '<pre>';
    print_r($token);
    echo '</pre>';
/* */
/* echo '<br />'. */ $time = base64_decode($token[0]);
/* echo '<br />'. */ $uid = base64_decode($token[1]);
/* echo '<br />'. */ sha1($email);
/* echo '<br />'. */ $codEmail = $token[2];

//verificando se o token e valido
if ($time + $limite > $agora) {
    //echo "<br> Token dentro do tempo!";
    //verificando se o email e o token sao iguais
    $Conn = new Conn;
    $Qry = new Qry;
    $c = $Conn->connect(HOST, USER, PASS, DB);

    //Verificando se o email esta cadastrado
    $s = "SELECT uid FROM " . PFIX . "user_login WHERE email='$email' ";

    $r = $Qry->query($s);
    $l = $Qry->rows($r);

    if ($l == 1) {
        $arr = $Qry->arr($r);
        //echo "<br> O e-mail existe!";
        if ($uid == $arr[0]['uid']) {
            //echo "<br />Uid ok!";
            $s = "UPDATE " . PFIX . "user_login SET senha = '$senha' WHERE email='$email' AND uid = '$uid' ";
            $r = $Qry->query($s);
            echo 'Sucesso: Senha trocada com sucesso.';
        } else {
            echo "<br />UID não correponde ao email";
        }
    } else {
        echo "<br />E-mail não cadastrado";
    }
} else {
    echo "<br> Token expirou!";
}