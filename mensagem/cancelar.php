<?php
if ($id) { //Para qual mensagem deve ser cancelada
    $Conn = new Conn;
    $Qry  = new Qry;
    $c    = $Conn->connect(HOST, USER, PASS, DB);

    //verificando se a messagem pode ser apagada
    $s = "SELECT status FROM " . PFIX . "procon_mensagem WHERE uid = '$uid' AND indice = '$id'";
    $r = $Qry->query($s);
    $l = $Qry->rows($r);
    if($l){
        $d = $Qry->arr($r);
        if($d[0]['status']==0){   
            //ja esta apagada
            $msg[309]['info'] = 'Esta mensagem j&aacute; est&aacute; apagada.';
            $temp = $msg[309];
        }elseif($d[0]['status']==1){   
            //pode ser apagada
            $s = "UPDATE " . PFIX . "procon_mensagem SET status = 0 WHERE uid = '$uid' AND indice = '$id'";
            $r = $Qry->query($s);
            if($r){
                $temp = $msg['308'];
            }else{
                $msg[309]['info'] = 'O status da mensagem não permite que seja apagada.';
                $temp = $msg[309];
            }
        }else{
            //nao pode ser apagada
            //ja esta apagada
            $msg[309]['info'] = 'O status '.$d[0]['status'].'.';
            $temp = $msg[309];
        }

    } else {
        $msg[309]['info'] = 'Mensagem não localizada';
        $temp = $msg[309];
    }
}else{
    $msg[309]['info'] = 'Id da mensagem em branco ou inv&aacute;lido';
    $temp = $msg[309];
}
$output = $temp;
