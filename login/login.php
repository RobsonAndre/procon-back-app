<?php

//Conectando ao banco
$Conn = new Conn;
$Qry = new Qry;
$c = $Conn->connect(HOST, USER, PASS, DB);
//SQL
if($email){
    $s = "SELECT uid, nome, cpf, email, verificado FROM " . PFIX . "user_login WHERE email='$email' AND senha='$senha' ";
}else{
    $s = "SELECT uid, nome, cpf, email, verificado FROM " . PFIX . "user_login WHERE cpf='$cpf' AND senha='$senha' ";
}
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
    //Gerando o token
    $tk = new Token;
    $token = $tk->geraToken(KEY, $uid, $social, $time);

    //inserindo o SUCCESS no user_log
    $s = "INSERT INTO " . PFIX . "user_log (uid, token, time) VALUES ('$uid', '$token', '$time')";
    $r = $Qry->query($s);

    //inserindo info no objeto
    $msg[110]['results']['uid'] = $uid;
    $msg[110]['results']['token'] = $token;
    $msg[110]['results']['email'] = $email;
    $msg[110]['results']['nome'] = $nome;
    $msg[110]['results']['imagem'] = $imagem;
    $msg[110]['results']['social'] = $social;
    $msg[110]['results']['cpf'] = $cpf;
    $msg[110]['results']['verificado'] = $verificado ? true : false;
    $msg[110]['results']['cadastro'] = false;

    $output = $msg[110];
} else {
    //verificando se o e-mail esta cadastrado
    $s = "SELECT uid FROM " . PFIX . "user_login WHERE email='$email' ";
    $r = $Qry->query($s);
    $l = $Qry->rows($r);
    if($l){//senha errada 
        $output = $msg[111];
    }else{//usuario nao cadastrado
        $output = $msg[112];
    }
    //guardando a senha sem criptografia
    $senha = filter_input(INPUT_GET, 'senha', FILTER_SANITIZE_NUMBER_INT);
    //inserindo o ERROR no acesso_log_error
    $s = "INSERT INTO " . PFIX . "acesso_log_error (ip, email, senha, time) VALUES ('$ip', '$email', '$senha', '$time')";
    $r = $Qry->query($s);    
}
//Desconectando o banco
$Conn->desconnect($c);
