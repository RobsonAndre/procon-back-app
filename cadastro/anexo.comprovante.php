<?php

//valida entrada
if (!$documento || !$lado || !$imagem) {
    $validate = false;
    if (!$documento) {
        $msg[129]['info'] = 'Comprovante inválido ou em branco.';
    } elseif (!$lado) {
        $msg[129]['info'] = 'Lado em branco ou inválido.';
    } elseif (!$imagem) {
        $msg[129]['info'] = 'Imagem em branco ou inválida.';
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
    $s = "SELECT indice FROM " . PFIX . "user_anexo_comprovante WHERE uid='$uid' AND lado='$lado' ";
    $r = $Qry->query($s);
    $l = $Qry->rows($r);
    if ($l) {
        //atualizar
        $d = $Qry->arr($r);
        $indice = $d[0]['indice'];
        $ss = "UPDATE ".PFIX."user_anexo_comprovante SET documento = '$documento', data = '$data', lado = '$lado', imagem='$imagem', time='$time' WHERE indice = '$indice' ";
    }else{
        //cadastrar
        $ss = "INSERT INTO ".PFIX."user_anexo_comprovante (uid, documento, data, lado, imagem, time) VALUES ('$uid', '$documento', '$data', '$lado', '$imagem', '$time')";
    }
    $rr = $Qry->query($ss);
    //Desconectando o banco
    $Conn->desconnect($c);
    $msg[128]['results']['comprovante'] = $documento;
    $msg[128]['results']['data'] = $data;
    $msg[128]['results']['lado'] = $lado;
    $msg[128]['results']['imagem'] = $imagem;
    $output = $msg[128];
} else {
    $output = $msg[129];
}