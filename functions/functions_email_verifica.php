<?php

function emailVerifica($uid, $email, $nome) {

    $time     = base64_encode(time());
    $codUid   = base64_encode($uid);
    $codEmail = sha1($email);
    $token    = base64_encode($time . '-' . $codUid . '-' . $codEmail);
    $path     = "http://papiroweb.com.br/integra/arquivos/";
    $url      = $path . "validacadastro/?token=" . $token . "&email=" . $email . "&";
    $msg      = '<div>Clique <a href="' . $url . '" target="_blank">Clique aqui</a> para validar seu e-mail.</div>';
    $ass      = 'Validar e-mail';

    $enviado  = enviarEmail($email, $nome, $msg, $ass);

    //$enviado = 1;
    return($enviado);
}
