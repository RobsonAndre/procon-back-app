<?php
include("../config/config.php");

if ($action == 1) {
    include("./redefinir.php");
} elseif ($action == 2) {
    //Validação do tokem
    $tk = new Token;
    $cod = $tk->validaToken(KEY, $token, $ldias, $time);
    if ($cod == 102) {
        include("./trocar.php");
    } else {
        $output = $msg[$cod];
    }
} else {
    $output = $msg[101];
}
echo json_encode($output);