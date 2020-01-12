<?php
//verifica o estabelecimento
if($ind_estabelecimento >= 1){
    //verifica o tipo da reclamacao
    if($ind_tipo >= 1){	
        if($queixa){    
            if($id){
                //Conectando com o banco
                /**/
                $Conn = new Conn;
                $Qry  = new Qry; 
                $c = $Conn->connect(HOST,USER,PASS,DB);
                /**
                * Sera editada uma nova reclamacao
                */
                //Verificando se a quixa pertence a este uid
                $s = "SELECT indice FROM ".PFIX."reclamacao WHERE uid = '$uid' AND indice = '$id' ";
                $r = $Qry->query($s);
                $l = $Qry->rows($r);
                if($l==1){
                    //montar o timestamp
                    $tdata = montaTimestamp($data,$hora);
                    //verificar o cadastro do usuario se esta completo
                    $status = validaCadastro($uid, $Qry);
                    //registrando a reclamacao
                    $s = "UPDATE ".PFIX."reclamacao SET ind_estabelecimento = '$ind_estabelecimento', status='$status', ind_tipo = '$ind_tipo', time='$time' WHERE indice = '$id' ";
                    if($r = $Qry->query($s)){
                        //Atualizando a queixa
                        $s = "UPDATE ".PFIX."reclamacao_queixa SET queixa = '$queixa', time='$time' WHERE ind_reclamacao = '$id' ";
                        $r = $Qry->query($s);
                        //Atualizado os anexos
                        if($anexos){
                            $anx = explode(',',$anexos);
                            for($i=0;$i<count($anx);$i++){
                                if($anx[$i]!=""){
                                    $a = $anx[$i];
                                    $s = "UPDATE ".PFIX."reclamacao_anexos SET anexo='$a', time='$time' WHERE  ind_reclamacao = '$id' ";
                                    $r = $Qry->query($s);
                                }
                            }
                        }
                        //inserindo os dados no results
                        $msg[212]['status_message']            = "Reclamação editada.";
                        $msg[212]['results']['uid']            = $id;
                        $msg[212]['results']['status_code']    = "1";
                        $msg[212]['results']['status_message'] = "Reclamacão editada com sucesso";
                        $temp = $msg[212];
                    }else{
                        $msg[213]['info'] = 'Erro ao tentar editar a reclamação na base de dados';
                        $temp = $msg[213];
                    }
                    //Desconectando o banco
                    $Conn->desconnect($c);
                }else{
                    $msg[213]['info'] = 'Reclamacao não pertence ao usuário!';
                    $temp = $msg[213];
                }
            }else{
                /**
                * Sera gravada uma nova reclamacao
                */ 
                //montar o timestamp
                $tdata = montaTimestamp($data,$hora);
                //Conectando com o banco
                /**/
                $Conn = new Conn;
                $Qry  = new Qry; 
                $c = $Conn->connect(HOST,USER,PASS,DB);
                //verificar o cadastro do usuario se esta completo
                $status = validaCadastro($uid, $Qry);
                //registrando a reclamacao
                $s = "INSERT INTO ".PFIX."reclamacao ( uid, ind_estabelecimento, status, ind_tipo, time) VALUES ('$uid', '$ind_estabelecimento', '$status', '$ind_tipo', '$time')";
                if($r = $Qry->query($s)){
                    //pegando o indice da reclamacao
                    $s = "SELECT indice FROM ".PFIX."reclamacao WHERE uid = '$uid' AND time = '$time' ";
                    $r = $Qry->query($s);
                    $d = $Qry->arr($r);
                    $indice = $d[0]['indice'];
                    //inserindo a queixa
                    $s = "	INSERT INTO ".PFIX."reclamacao_queixa (ind_reclamacao, queixa, time) VALUES ('$indice', '$queixa','$time')";
                    $r = $Qry->query($s);
                    //Inserindo os anexos
                    if($anexos){
                        $anx = explode(',',$anexos);
                        for($i=0;$i<count($anx);$i++){
                            if($anx[$i]!=""){
                                $a = $anx[$i];
                                $s = "INSERT INTO ".PFIX."reclamacao_anexos (ind_reclamacao, anexo, time ) VALUES ('$indice', '$a', '$time')";
                                $r = $Qry->query($s);
                            }
                        }
                    }
                    //inserindo os dados no results
                    $msg[212]['results']['uid']            = $indice;
                    $msg[212]['results']['status_code']    = "1";
                    $msg[212]['results']['status_message'] = "Reclamacão submetida com sucesso";
                    $temp = $msg[212];
                }else{
                    $msg[213]['info'] = 'Erro ao tentar inserir a reclamação na base de dados';
                    $temp = $msg[213];
                }
                //Desconectando o banco
                $Conn->desconnect($c);
            }
        }else{
            $msg[213]['info'] = 'Queixa em branco ou inválida';
            $temp = $msg[213];
        }
    }else{
	$msg[213]['info'] = 'Reclamação não definida';
	$temp = $msg[213];
    }
}else{
    $msg[213]['info'] = 'Estabelecimento não definido';
    $temp = $msg[213];
}
//return
$output = $temp;