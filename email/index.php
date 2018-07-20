<?php
include("../config/config.php");
//Validação do tokem
$tk = new Token;
$cod = $tk->validaToken(KEY, $token, $ldias, $time);
if ($cod == 102) {
    if ($action == 1) {
        include("./verificar.php");
    } else {
        $output = $msg[101];
    }
} else {
    $output = $msg[$cod];
}
echo json_encode($output);
