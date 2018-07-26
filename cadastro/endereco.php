<?php

//valida entrada
if (!$cep || !$logradouro || !$bairro || !$cidade || !$uf) {
    $validate = false;
    if (!$cep) {
        $msg[125]['info'] = 'CEP inválido ou em branco.';
    } elseif (!$logradouro) {
        $msg[125]['info'] = 'Logradouro inválido ou em branco.';
    } elseif (!$bairro) {
        $msg[125]['info'] = 'Bairro em branco ou inválido.';
    } elseif (!$cidade) {
        $msg[125]['info'] = 'Cidade em branco ou inválida.';
    } elseif (!$uf) {
        $msg[125]['info'] = 'UF em branco ou inválida.';
    } 
} else {
    $validate = true;
}

if ($validate) {
    //Connect
    $Conn = new Conn;
    $Qry = new Qry;
    $c = $Conn->connect(HOST, USER, PASS, DB);
    //verificando se o endereco cadastrado ja esta cadastrado
    $s = "SELECT uid FROM " . PFIX . "user_endereco WHERE uid='$uid' ";
    $r = $Qry->query($s);
    $l = $Qry->rows($r);
    if ($l) {
        //atualizar
        $ss = "UPDATE ".PFIX."user_endereco SET cep = '$cep', logradouro = '$logradouro', numero = '$numero', complemento='$complemento', bairro='$bairro', cidade='$cidade', uf='$uf', time='$time' WHERE uid = '$uid' ";
    }else{
        //cadastrar
        $ss = "INSERT INTO ".PFIX."user_endereco (uid, cep, logradouro, numero, complemento, bairro, cidade, uf, time) VALUES ('$uid', '$cep', '$logradouro', '$numero', '$complemento', '$bairro', '$cidade', '$uf','$time')";
    }
    $rr = $Qry->query($ss);
    //Desconectando o banco
    $Conn->desconnect($c);
    $msg[124]['results']['cep'] = $cep;
    $msg[124]['results']['logradouro'] = $logradouro;
    $msg[124]['results']['numero'] = $numero;
    $msg[124]['results']['complemento'] = $complemento;
    $msg[124]['results']['bairro'] = $bairro;
    $msg[124]['results']['cidade'] = $cidade;
    $msg[124]['results']['uf'] = $uf;
    $output = $msg[124];
} else {
    $output = $msg[125];
}