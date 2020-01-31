<?php
//Grava o log de acesso
$Conn = new Conn;
$Qry = new Qry;
$Conn->connect(HOST, USER, PASS, DB);
gravaLogAcesso($uid, $url, $time, $Qry);
$Conn->desconnect($c);