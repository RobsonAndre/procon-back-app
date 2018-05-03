<?php
	//Conectando ao banco
	$Conn = new Conn;
	$Qry  = new Qry; 
	$c = $Conn->connect(HOST,USER,PASS,DB);
	//SQL
	$s = "SELECT uid FROM papiroweb.".PFIX."user_login WHERE email='$email' AND senha='$psw' ";
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
		$s = "INSERT INTO papiroweb.".PFIX."user_log (uid, token, time) VALUES ('$uid', '$token', '$time')";
		$r = $Qry->query($s);
		
		//inserindo UID e TOKEN no objeto
		$msg[110]['uid']        = $uid;
		$msg[110]['token']      = $token;
		$msg[110]['verificado'] = false;
		$msg[110]['cadastro']   = false;
		
		$output = $msg[110];	
	}else{
		//inserindo o ERROR no acesso_log_error
		$s = "INSERT INTO papiroweb.".PFIX."acesso_log_error (email, senha, time) VALUES ('$email', '$senha', '$time')";
		$r = $Qry->query($s);
		$output = $msg[111];
	}
?>