<?php

function redefinirSenha($uid, $email, $nome) {
    /** /
      echo '<br />uid: '.$uid;
      echo '<br />email: '.$email;
      echo '<br />nome: '.$nome;
    /**/
    
    $time     = base64_encode(time());
    $codUid   = base64_encode($uid);
    $codEmail = sha1($email);
    $token    = base64_encode($time . '-' . $codUid . '-' . $codEmail);
    $path     = "http://papiroweb.com.br/integra/";
    $url      = $path . "redefinirsenha/?token=" . $token . "&email=" . $email . "&";
    $msg      = '<div>Para redefinir a sua senha, <a href="' . $url . '" target="_blank">click aqui</a> </div>';
    
    $enviado  = enviarEmail($email, $nome, $msg);
    
    return($enviado);
}
?>