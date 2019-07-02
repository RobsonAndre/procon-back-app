<?php

//valida entrada
if (!$documento || !$lado || !$imagem) {
    $validate = false;
    if (!$documento) {
        $msg[127]['info'] = 'Documento inválido ou em branco.';
    } elseif (!$lado) {
        $msg[127]['info'] = 'Lado em branco ou inválido.';
    } elseif (!$imagem) {
        $msg[127]['info'] = 'Imagem em branco ou inválida.';
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
    $s = "SELECT indice FROM " . PFIX . "user_anexo_documento WHERE uid='$uid' AND lado='$lado' ";
    $r = $Qry->query($s);
    $l = $Qry->rows($r);
    if ($l) {
        //atualizar
        $d = $Qry->arr($r);
        $indice = $d[0]['indice'];
        $ss = "UPDATE ".PFIX."user_anexo_documento SET documento = '$documento', data = '$data', lado = '$lado', imagem='$imagem', time='$time' WHERE indice = '$indice' ";
    }else{
        //cadastrar
        $ss = "INSERT INTO ".PFIX."user_anexo_documento (uid, documento, data, lado, imagem, time) VALUES ('$uid', '$documento', '$data', '$lado', '$imagem', '$time')";
    }
    $rr = $Qry->query($ss);
    //Desconectando o banco
    $Conn->desconnect($c);
    $msg[126]['results']['documento'] = $documento;
    $msg[126]['results']['data'] = $data;
    $msg[126]['results']['lado'] = $lado;
    $msg[126]['results']['imagem'] = $imagem;
    $output = $msg[126];
} else {
    $output = $msg[127];
}