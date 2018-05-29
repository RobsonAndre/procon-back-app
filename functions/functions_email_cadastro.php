<?php

function emailCadastro($uid, $email, $nome) {

    $time     = base64_encode(time());
    $codUid   = base64_encode($uid);
    $codEmail = sha1($email);
    $token    = base64_encode($time . '-' . $codUid . '-' . $codEmail);
    $path     = "http://papiroweb.com.br/integra/arquivos/";
    $url      = $path . "validacadastro/?token=" . $token . "&email=" . $email . "&";
    $msg      = '<div>Clique <a href="' . $url . '" target="_blank">click aqui</a> para validar seu cadastro.</div>';
    $ass      = 'Validar cadastro';

    $enviado  = enviarEmail($email, $nome, $msg, $ass);

    return($enviado);
}
