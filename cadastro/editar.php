<?php

//valida nome completo
if (!$nome || !$email || !$sexo || !$nasc) {
    $validate = false;
    if (!$nome) {
        $msg[123]['info'] = 'Nome em branco ou inválido, digite seu nome completo.';
    } elseif (!$email) {
        $msg[123]['info'] = 'E-mail em branco ou inválido.';
    } elseif (!$sexo) {
        $msg[123]['info'] = 'Sexo em branco ou inválido.';
    } elseif (!$nasc) {
        $msg[123]['info'] = 'Data de nascimento em branco ou inválida.';
    } 
} else {
    $validate = true;
}

if ($validate) {
    //Connect
    $Conn = new Conn;
    $Qry = new Qry;
    $c = $Conn->connect(HOST, USER, PASS, DB);
    //verificando se o E-mail é no mesmo ou fou modificado
    $ss = "SELECT uid FROM " . PFIX . "user_login WHERE email='$email' ";
    $rr = $Qry->query($ss);
    $ll = $Qry->rows($rr);
    if ($ll) {
        //verificando se o email esta cadastrado para o proprio usuario
        $dd = $Qry->arr($rr);
        if($dd[0]['uid']===$uid){
            //email nao foi alterado
            //usuario ira manter o e-mail
            $valEmail = 1;
        }else{
            //o usuario esta tentando trocar o email 
            //email ja esta cadastrado para outro usuario
            $valEmail = 0;
            $msg[123]['info'] = 'E-mail já cadastrado para outro usuário.';
        }
    }else{
        //o email nao esta cadastro na base de dados
        //usuario esta trocando o e-mail
        $valEmail = 2;
    }
    
    if($valEmail>0){
        if($valEmail===2){
            //troca o e-mail
            $s = "UPDATE " . PFIX . "user_login SET nome='$nome', nascimento='$nasc', email='$email', verificado='0', sexo='$sexo', time='$time' WHERE uid = '$uid'";
        }else{
            //mantem o e-mail
            $s = "UPDATE " . PFIX . "user_login SET nome='$nome', sexo='$sexo', nascimento='$nasc', time='$time' WHERE uid = '$uid'";
        }
        $r = $Qry->query($s);
        //montando o novo result
        $s = "SELECT uid, nome, cpf, email, verificado FROM " . PFIX . "user_login WHERE uid='$uid' ";
        $r = $Qry->query($s);
        $l = $Qry->rows($r);
        if ($l) {
            //Pegando o UID
            $d = $Qry->arr($r);
            $uid = $d[0]['uid'];
            $nome = $d[0]['nome'];
            $cpf = substr($d[0]['cpf'], 0, 3) . '.***.***-' . substr($d[0]['cpf'], 9, 2);
            $email = $d[0]['email'];
            $verificado = $d[0]['verificado'];
            $imagem = userImagem($uid);
            //inserindo info no objeto
            $msg[122]['results']['uid'] = $uid;
            $msg[122]['results']['token'] = $token;
            $msg[122]['results']['email'] = $email;
            $msg[122]['results']['nome'] = $nome;
            $msg[122]['results']['imagem'] = $imagem;
            $msg[122]['results']['nasc'] = date('d-m-Y',$nasc);
            $msg[122]['results']['sexo'] = $sexo;
            $msg[122]['results']['social'] = $social;
            $msg[122]['results']['cpf'] = $cpf;
            $msg[122]['results']['verificado'] = $verificado ? true : false;
            $msg[122]['results']['cadastro'] = false;
            $output = $msg[122];
        }else{
            $msg[123]['info'] = 'Erro do sistema, tente mais tarde.';
            $output = $msg[123];
        }
    }else{
        $output = $msg[123];
    }
    //Desconectando o banco
    $Conn->desconnect($c);
} else {
    $output = $msg[123];
}