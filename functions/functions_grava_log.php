<?php
function gravaLogAcesso($uid, $url, $time, $Qry){
    /**/
    $s = "INSERT INTO ".PFIX."user_log_acesso (uid, url, time) VALUES ('$uid', '$url', '$time') ";
    $r = $Qry->query($s);
    return (1);
    /**/
}