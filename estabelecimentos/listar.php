<?php
//Conectando com o banco
$Conn = new Conn;
$Qry = new Qry;
$c = $Conn->connect(HOST, USER, PASS, DB);
//SQL
$s = "SELECT indice AS uid, estabelecimento FROM " . PFIX . "base_reclamacao_estabelecimento WHERE status > 0 ORDER BY estabelecimento";
$r = $Qry->query($s);
$l = $Qry->rows($r);
if ($l) {
    $arr = $Qry->arr($r);
    $msg[200]['results']['qtde'] = $l;
    $msg[200]['results'] = $arr;
    /** /
      for($i=0; $i<count($arr); $i++){
      $msg[200]['results'][$i]['uid'] = $arr[$i]['uid'];
      $msg[200]['results'][$i]['estabelecimento'] = $arr[$i]['estabelecimento'];
      }
      /* */
}

$output = $msg[200];

//Desconectando o banco
$Conn->desconnect($c);
