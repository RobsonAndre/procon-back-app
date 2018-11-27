<?php

function mascaraMsgTipo($id,$Qry) {
    $s = "SELECT tipo FROM ".PFIX."procon_mensagem_tipo WHERE indice = '$id' ";
    $r = $Qry->query($s);
    $d = $Qry->arr($r);
    return (utf8_encode($d[0]['tipo']));
}
