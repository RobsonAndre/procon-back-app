<?php
	//Conectando ao banco
	$Conn = new Conn;
	$Qry  = new Qry; 
	$c = $Conn->connect(HOST,USER,PASS,DB);
	//SQL
	$s = "SELECT uid FROM ".PFIX."user_login WHERE email='$email' AND senha='$senha' ";
	$r = $Qry->query($s);
	$l = $Qry->rows($r);
	if($l){
		//Pegando o UID
		$d = $Qry->arr($r);
		$uid = $d[0]['uid'];
		//Gerando o token
		$tk    = new Token;
		$token = $tk->geraToken(KEY,$uid,$social,$time); 
		
		//inserindo o SUCCESS no user_log
		$s = "INSERT INTO ".PFIX."user_log (uid, token, time) VALUES ('$uid', '$token', '$time')";
		$r = $Qry->query($s);
		
		//inserindo info no objeto
		$msg[110]['results']['uid']        = $uid;
		$msg[110]['results']['token']      = $token;
		$msg[110]['results']['nome']       = 'Nome Completo';
		$msg[110]['results']['imagem']     = '';
		$msg[110]['results']['sexo']       = 'masculino';
		$msg[110]['results']['social']     = $social;
		$msg[110]['results']['verificado'] = false;
		$msg[110]['results']['cadastro']   = false;
		
		$output = $msg[110];	
	}else{
		//guardando a senha sem criptografia
		$senha = $_GET['senha'];
		//inserindo o ERROR no acesso_log_error
		$s = "INSERT INTO ".PFIX."acesso_log_error (email, senha, time) VALUES ('$email', '$senha', '$time')";
		$r = $Qry->query($s);
		$output = $msg[111];
	}
	//Desconectando o banco
	$Conn->desconnect($c);
?>