<?php

function pegarProcon($id,$Qry) {
    $s = "SELECT procon FROM ".PFIX."procon WHERE indice = '$id' ";
    $r = $Qry->query($s);
    $d = $Qry->arr($r);
    return (utf8_encode($d[0]['procon']));
}
