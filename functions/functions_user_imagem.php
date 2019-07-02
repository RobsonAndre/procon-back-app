<?php

function userImagem($uid,$Qry) {
    $s = "SELECT foto, time FROM " . PFIX . "user_foto WHERE uid='$uid' ";
    $r = $Qry->query($s);
    $l = $Qry->rows($r);
    if ($l) {
        $d = $Qry->arr($r);
        return $d[0]['foto'];
    }else{
        return false;
    }
}
