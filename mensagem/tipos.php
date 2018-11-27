<?php
if ($uid) { //Para qual unidade do procon a mensagem deve ser enviada
    $Conn = new Conn;
    $Qry  = new Qry;
    $c    = $Conn->connect(HOST, USER, PASS, DB);

    //selecionando as mensagens iniciadas pelo usuário - ind_resposta = 0 
    $s = "SELECT * FROM " . PFIX . "procon_mensagem_tipo WHERE status <> 0 ";
    $r = $Qry->query($s);
    $l = $Qry->rows($r);
    $d = $Qry->arr($r);
    $msg[306]['qtde'] = $l;
    for ($i=0;$i<$l;$i++){
        $arr[$i]['id'] = $d[$i]['indice'];
        $arr[$i]['tipo'] = utf8_encode($d[$i]['tipo']);
    }
    $msg[306]['results'] = $arr;
    $temp = $msg[306];
} else {
    $msg[305]['info'] = 'Usuario nao identificado';
    $temp = $msg[305];
}

$output = $temp;
