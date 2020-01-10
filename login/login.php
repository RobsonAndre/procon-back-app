<?php
//Conectando ao banco
$Conn = new Conn;
$Qry = new Qry;
$c = $Conn->connect(HOST, USER, PASS, DB);
//SQL
if ($email) {
    $s = "SELECT uid, nome, sexo, nascimento, cpf, email, verificado FROM " . PFIX . "user_login WHERE email='$email' AND senha='$senha' ";
} else {
    $s = "SELECT uid, nome, sexo, nascimento, cpf, email, verificado FROM " . PFIX . "user_login WHERE cpf='$cpf' AND senha='$senha' ";
}
$r = $Qry->query($s);
$l = $Qry->rows($r);
if ($l) {
    //Pegando o UID
    $d = $Qry->arr($r);
    if($d[0]['status']==1){
        $uid = $d[0]['uid'];
        $nome = utf8_encode($d[0]['nome']);
        $cpf = substr($d[0]['cpf'], 0, 3) . '.***.***-' . substr($d[0]['cpf'], 9, 2);
        $email = $d[0]['email'];
        $verificado = $d[0]['verificado'];
        $foto = userImagem($uid, $Qry);
        $nasc = $d[0]['nascimento'] ? date('Y-m-d', $d[0]['nascimento']) : '';
        $sexo = $d[0]['sexo'];
        //Gerando o token
        $tk = new Token;
        $token = $tk->geraToken(KEY, $uid, $social, $time);

        //inserindo o SUCCESS no user_log
        $s = "INSERT INTO " . PFIX . "user_log (uid, token, time) VALUES ('$uid', '$token', '$time')";
        $r = $Qry->query($s);
        /**/
        //inserindo info no objeto
        $msg[110]['results']['uid'] = $uid;
        $msg[110]['results']['token'] = $token;
        $msg[110]['results']['email'] = $email;
        $msg[110]['results']['nome'] = utf8_decode($nome);
        $msg[110]['results']['foto'] = $foto;
        $msg[110]['results']['social'] = $social;
        $msg[110]['results']['sexo'] = $sexo;
        $msg[110]['results']['nasc'] = $nasc;
        $msg[110]['results']['cpf'] = $cpf;
        $msg[110]['results']['verificado'] = $verificado ? true : false;
        $msg[110]['results']['cadastro'] = validaCadastro($uid, $Qry) ? true : false;
        /**/
        $output = $msg[110];
    }else{
        $output = $msg[113];
    }
} else {
    if ($email) {
        //verificando se o e-mail esta cadastrado
        $s = "SELECT uid FROM " . PFIX . "user_login WHERE email='$email' ";
        $r = $Qry->query($s);
        $l = $Qry->rows($r);
        if ($l) {//senha errada 
            $output = $msg[111];
        } else {//usuario nao cadastrado
            $output = $msg[112];
        }
    } else {
        //verificando se o cpf esta cadastrado
        $s = "SELECT uid FROM " . PFIX . "user_login WHERE cpf='$$cpf' ";
        $r = $Qry->query($s);
        $l = $Qry->rows($r);
        if ($l) {//senha errada 
            $output = $msg[111];
        } else {//usuario nao cadastrado
            $output = $msg[112];
        }
    }
    //guardando a senha sem criptografia
    $senha = filter_input(INPUT_GET, 'senha', FILTER_SANITIZE_NUMBER_INT);
    //inserindo o ERROR no acesso_log_error
    $s = "INSERT INTO " . PFIX . "acesso_log_error (ip, email, senha, time) VALUES ('$ip', '$email', '$senha', '$time')";
    $r = $Qry->query($s);
}
//Desconectando o banco
$Conn->desconnect($c);
