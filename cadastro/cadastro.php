<?php
//valida nome completo
if (!$nome || !$cpf || !$email || !$senha || !$termo || !$uf || !$cidade ) {
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
    }elseif (!$uf) {
        $msg[121]['info'] = 'Id da UF em branco ou inválido.';
    }elseif (!$cidade) {
        $msg[121]['info'] = 'Id da Cidade em branco ou inválido.';
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
        $s = "INSERT INTO " . PFIX . "user_login (nome, cpf, email, senha, ind_estado, ind_municipio, time) VALUES ('$nome','$cpf','$email','$senha','$uf','$cidade','$time')";
        $r = $Qry->query($s);
        if ($r) {
            //recuperando o indice e gerando o UID
            $s = "SELECT indice FROM " . PFIX . "user_login WHERE cpf = '$cpf' AND email = '$email' AND time='$time'";
            $r = $Qry->query($s);
            $l = $Qry->rows($r);
            //Gravando o uid
            if ($l) {
                $d = $Qry->arr($r);
                $ind = $d[0]['indice'];
                $uid = sha1($ind);
                //registrando a aceitacao do termo de uso e politica de privacidade
                //pegando o indice do termo
                $st = "SELECT indice FROM " . PFIX . "termo WHERE status = 1";
                $rt = $Qry->query($st);
                $dt = $Qry->arr($rt);
                $itermo = $dt[0]['indice'];
                //pegando o indice da politica
                $sp = "SELECT indice FROM " . PFIX . "politica WHERE status = 1";
                $rp = $Qry->query($sp);
                $dp = $Qry->arr($rp);
                $ipolitica = $dp[0]['indice'];
                //registrando o aceite
                $sql = "INSERT INTO " . PFIX . "user_termo_politica (uid, termo, politica, time) VALUES ('$uid', '$itermo', '$ipolitica', '$time') ";
                $Qry->query($sql);
                //atualizando a base de dados com o uid
                $s = "UPDATE " . PFIX . "user_login SET uid = '$uid' WHERE indice = '$ind' ";
                $r = $Qry->query($s);
                if ($r) {
                    emailCadastro($uid, $email, $nome);
                    $output = $msg[120];
                } else {
                    $msg[121]['info'] = "Erro ao gerar o UID, tente novamente.";
                    $output = $msg[121];
                }
            } else {
                //TODO - fazer o rollback do cadastro, porque senão o usuario nao poderá fazer um novo cadastro 
                $msg[121]['info'] = "Erro ao tentar gerar o UID, tente novamente.";
                $output = $msg[121];
            }
            //verificando se o procon desta cidade esta no sistema
            $sss = "SELECT indice FROM ".PFIX."procon WHERE ind_estado = '$uf' AND ind_municipio = '$cidade' " ;
            $rrr = $Qry->query($sss);
            $lll = $Qry->rows($rrr);
            
            if($lll){
            
                //O procon da cidade esta no sistema
                $msg[120]['existe'] = 1;
            
            }else{
            
                //O procon da cidade não esta no sistema
                $msg[120]['existe'] = 0;
            
            }
            $output = $msg[120];
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