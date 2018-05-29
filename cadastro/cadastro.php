<?php

//valida nome completo
if (!$nome || !$cpf || !$email || !$senha || !$termo) {
    $validate = false;
    if (!$nome) {
        $msg[121]['info'] = 'Nome em branco ou inválido, digite seu nome completo.';
    } elseif (!$cpf) {
        $msg[121]['info'] = 'CPF em branco ou inválido.';
    } elseif (!$email) {
        $msg[121]['info'] = 'E-mail em branco ou inválido.';
    } elseif (!$senha) {
        $msg[121]['info'] = 'Senha em branco ou inválida, a senha deve conter de 8 a 15 caracteres.';
    } elseif (!$termo) {
        $msg[121]['info'] = 'Termo de uso e Política de Privacidade não lidos e não aceitos.';
    }
} else {
    $validate = true;
}

if ($validate) {
    //Init
    $valEmail = true;
    $valCPF = true;
    //Connect
    $Conn = new Conn;
    $Qry = new Qry;
    $c = $Conn->connect(HOST, USER, PASS, DB);
    //verificando se o E-mail já não esta cadastrado
    $ss = "SELECT indice FROM " . PFIX . "user_login WHERE email='$email' ";
    $rr = $Qry->query($ss);
    $ll = $Qry->rows($rr);
    if ($ll) {
        $valEmail = false;
    }
    //verificando se o E-mail já não esta cadastrado
    $s = "SELECT indice FROM " . PFIX . "user_login WHERE cpf='$cpf' ";
    $r = $Qry->query($s);
    $l = $Qry->rows($r);
    if ($l) {
        $valCPF = false;
    }

    if (!$valCPF) {

        $msg[121]['info'] = "O CPF " . $cpf . " já esta cadastrado, tente recuperar a senha.";
        $output = $msg[121];
    } elseif (!$valEmail) {

        $msg[121]['info'] = "O E-mail " . $email . " já esta cadastrado, tente recuperar a senha.";
        $output = $msg[121];
    } else {
        $s = "INSERT INTO " . PFIX . "user_login (nome, cpf, email, senha, time) VALUES ('$nome','$cpf','$email','$senha','$time')";
        if ($r = $Qry->query($s)) {
            //recuperando o indice e gerando o UID
            $s = "SELECT indice FROM " . PFIX . "user_login WHERE cpf = '$cpf' AND email = '$email' AND time='$time'";
            $r = $Qry->query($s);
            $l = $Qry->rows($r);
            if ($l) {
                $d = $Qry->arr($r);
                $ind = $d[0]['indice'];
                $uid = sha1($ind);
                //atualizando a base de dados com o uid
                $s = "UPDATE " . PFIX . "user_login SET uid = '$uid' WHERE indice = '$ind' ";
                if ($r = $Qry->query($s)) {
                    emailCadastro($uid, $email, $nome);
                    $output = $msg[120];
                } else {
                    $msg[121]['info'] = "Erro ao gerar o UID, tente novamente.";
                    $output = $msg[121];
                }
            } else {
                $msg[121]['info'] = "Erro ao tentar gerar o UID, tente novamente.";
                $output = $msg[121];
            }
        } else {
            $msg[121]['info'] = "Erro de acesso ao banco de dados, tente novamente.";
            $output = $msg[121];
        }
    }
    //Desconectando o banco
    $Conn->desconnect($c);
} else {
    $output = $msg[121];
}