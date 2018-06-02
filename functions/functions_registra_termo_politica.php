<?php

function registraTermoPolitica($uid) {
    /**/
    //include("./config/connect.php");
    //include("./config/query.php");
    //conecao com o banco
    $Conn = new Conn;
    $Qry = new Qry;
    $cnt = $Conn->connect(HOST, USER, PASS, DB);
    //variaveis
    $time = time();
    //pegando o indice do termo
    $st = "SELECT indice FROM " . PFIX . "termo WHERE status = 1";
    $rt = $Qry->query($st);
    $dt = $Qry->arr($rt);
    $itermo = $dt[0]['indice'];
    //pegando o indice da politica
    $sp = "SELECT indice FROM " . PFIX . "politica WHERE status = 1";
    $rp = $Qry->query($sp);
    $dp = $Qry->arr($rp);
    $ipolitica = $dp[0]['indice'];
    //registrando o aceite
    $sql = "INSERT INTO " . PFIX . "user_termo_politica (uid, termo, politica, time) VALUES ('$uid', '$itermo', '$ipolitica', '$time') ";
    $Qry->query($sql);
    //desconexao com o banco
    $Conn->desconnect($cnt);
    /**/
}
