<?php
if ($id) { //Para qual unidade do procon a mensagem deve ser enviada
    $Conn = new Conn;
    $Qry  = new Qry;
    $c    = $Conn->connect(HOST, USER, PASS, DB);

    //selecionando as mensagens
    $s = "SELECT * FROM " . PFIX . "procon_mensagem WHERE uid = '$uid' AND indice = '$id' AND status > 0 ";
    $r = $Qry->query($s);
    $l = $Qry->rows($r);
    
    if($l){
        $d = $Qry->arr($r);

        $msg[304]['id']          = $d[0]['indice'];
        $msg[304]['status']      = $d[0]['status'];
        $msg[304]['status_info'] = statusMensagem($d[0]['status']);
        $msg[304]['mensagem']    = utf8_encode($d[0]['mensagem']);
        $msg[304]['data']        = date('d-m-Y',$d[0]['time']);
        $msg[304]['hora']        = date('H',$d[0]['time']).'h'.date('i',$d[0]['time']);
        $msg[304]['protocolo']   = $d[0]['protocolo'];
        $msg[304]['tipo']        = mascaraMsgTipo($d[0]['ind_tipo'],$Qry);
        //procon
        $msg[304]['procon']      = pegarProcon($d[0]['ind_procon'],$Qry);
        //verificando as trocas de mensagens - respostas
        $ind_resposta            = $d[0]['indice'];
        $ss = "SELECT indice, uid, ind_resposta, mensagem, status, time FROM " . PFIX . "procon_mensagem WHERE ind_resposta = '$ind_resposta' AND status > 0 ORDER BY indice";
        $rr = $Qry->query($ss);
        $ll = $Qry->rows($rr);
        if($ll){
            $dd = $Qry->arr($rr);
            /** /
            echo '<pre>';
            print_r($dd);
            echo '</pre>';
            /**/
            /**/
            for($i=0;$i<count($dd);$i++){
                $arr['indice']      = $dd[$i]['indice'];
                $arr['mensagem']    = $dd[$i]['mensagem'];
                $arr['data']        = date('d-m-Y',$dd[$i]['time']);
                $arr['hora']        = date('H',$dd[$i]['time']).'h'.date('i',$dd[0]['time']);
                $arr['emissor']     = $dd[$i]['uid']==$uid ? 'Voc&ecirc;' : $msg[304]['procon'];
                $arr['origem']      = $dd[$i]['uid']==$uid ? 1 : 0;
                $arr['status']      = $dd[$i]['status'];
                $arr['status_info'] = statusMensagem($dd[$i]['status']);
 
                $msg[304]['resposta'][$i] = $arr;
            }
            /**/
        }
         
        $temp = $msg[304];

    } else {
        $msg[305]['info'] = 'Mensagem n&atilde;o localizada';
        $temp = $msg[305];
    }
}else{
    $msg[305]['info'] = 'Id da mensagem em branco ou inv&aacute;lido';
    $temp = $msg[305];
}
$output = $temp;
