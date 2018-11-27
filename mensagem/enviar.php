<?php

if ($procon) { //Para qual unidade do procon a mensagem deve ser enviada
    if ($ind_tipo) {
        if ($mensagem) { //Verifica se a mensagem esta valida
            $Conn = new Conn;
            $Qry = new Qry;
            $c = $Conn->connect(HOST, USER, PASS, DB);

            //Gerando o protocolo
            $protocolo = date('Y', $time) . '.' . strtoupper(uniqid());
            //registrando a mensagem
            $s = "	INSERT INTO " . PFIX . "procon_mensagem 
                    ( uid, ind_procon, ind_tipo, ind_resposta, protocolo, mensagem, time) 
		VALUES 
                    ('$uid', '$procon', '$ind_tipo', '$ind_resposta', '$protocolo', '$mensagem', '$time')
             ";
            $r = $Qry->query($s);
            if ($r) {

                if ($ind_resposta) { //esta mensagem é uma resposta - identificar o id da mensagem que gerou a resposta
                    //Pegando o indice da mensagem pai
                    $ind_mensagem = pegarIndMsgPai($ind_resposta, $Qry);
                } else {//esta mensagem inicia a discusão - não e uma resposta
                    //Pegando o id da mensagem
                    $s = "SELECT indice FROM " . PFIX . "procon_mensagem WHERE uid='$uid' AND time='$time'";
                    $r = $Qry->query($s);
                    $d = $Qry->arr($r);
                    $ind_mensagem = $d[0]['indice'];
                }
                $msg[300]['id'] = $ind_mensagem;
                $temp = $msg[300];
            } else {
                //Avisar o erro
                $msg[301]['info'] = 'Erro ao tentar enviar a Mensagem, tente mais tarde';
                $temp = $msg[301];
            }
            //Desconectando o banco
            $Conn->desconnect($c);
        } else {
            $msg[301]['info'] = 'Mensagem não definida';
            $temp = $msg[301];
        }
    } else {
        $msg[301]['info'] = 'Tipo indefinido';
        $temp = $msg[301];
    }
} else {
    $msg[301]['info'] = 'Agencia do Procon não definida';
    $temp = $msg[301];
}

$output = $temp;
