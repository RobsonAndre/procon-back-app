<?php
include("../config/config.php");

if ($action == 1) {
    include("./cadastro.php");
} elseif ( $action == 2 || $action == 3 || $action == 4 || $action == 5  || $action == 6 || $action == 7 ) {
    //Validação do tokem
    $tk = new Token;
    $cod = $tk->validaToken(KEY, $token, $ldias, $time);
    if ($cod == 102) {
        if($action==2){
            include("./editar.php");
        }elseif($action==3){
            include("./endereco.php");
        }elseif($action==4){
            include("./anexo.documento.php");
        }elseif($action==5){
            include("./anexo.comprovante.php");
        }elseif($action==6){
            include("./cadastro.view.php");
        }elseif($action==7){
            include("./foto.php");
        }
    } else {
        $output = $msg[$cod];
    }
} else {
    $output = $msg[101];
}
echo json_encode($output);
