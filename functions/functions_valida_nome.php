<?php

function validaNome($nome) {
    $nome   = trim($nome);
    $tam    = strlen($nome);
    $espaco = strpos($nome, ' ');
    $parte  = explode(' ', $nome);
    
    if ($tam < 5 && $nome) {
        $nome = false;
    }elseif ($tam > 124) {
        $nome = false;
    }elseif ($espaco < 1) {
        $nome = false;
    }elseif (count($parte) < 2 ) {
        $nome = false;
    }elseif (count($parte) == 2 && (strlen($parte[count($parte) - 1]) < 2)) {
        $nome = false;
    }elseif (strlen($parte[0]) < 3) {
        $nome = false;
    }
    /**/
    elseif(caracterEspecial($nome)){
        $nome = false;
    }
    /**/
    return $nome;
}
