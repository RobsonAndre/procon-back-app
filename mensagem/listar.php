<?php
if ($uid) { //Para qual unidade do procon a mensagem deve ser enviada
    $Conn = new Conn;
    $Qry  = new Qry;
    $c    = $Conn->connect(HOST, USER, PASS, DB);

    //selecionando as mensagens iniciadas pelo usuário - ind_resposta = 0 
    $s = "SELECT * FROM " . PFIX . "procon_mensagem WHERE uid = '$uid' AND ind_resposta = 0 AND status > 0 ";
    $r = $Qry->query($s);
    $l = $Qry->rows($r);
    $d = $Qry->arr($r);
    $msg[302]['qtde'] = $l;
    for ($i=0;$i<$l;$i++){
        $arr[$i]['id']          = $d[$i]['indice'];
        $arr[$i]['status']      = $d[$i]['status'];
        $arr[$i]['status_info'] = statusMensagem($arr[$i]['status']);
        $arr[$i]['mensagem']    = $d[$i]['mensagem'];
        $arr[$i]['data']        = date('d-m-Y',$d[$i]['time']);
        $arr[$i]['hora']        = date('H',$d[$i]['time']).'h'.date('i',$d[$i]['time']);
        $arr[$i]['protocolo']   = $d[$i]['protocolo'];
        $arr[$i]['tipo']        = mascaraMsgTipo($d[$i]['ind_tipo'],$Qry);
        //Selecionando para qual procon foi direcionado a mensagem
        $arr[$i]['procon']      = pegarProcon($d[$i]['ind_procon'],$Qry);
    }
    $msg[302]['results'] = $arr;
    $temp = $msg[302];
} else {
    $msg[301]['info'] = 'Usuario nao identificado';
    $temp = $msg[301];
}

$output = $temp;
