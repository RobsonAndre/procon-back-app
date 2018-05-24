<?php
	//Conectando com o banco
	$Conn = new Conn;
	$Qry  = new Qry; 
	$c = $Conn->connect(HOST,USER,PASS,DB);
	
	//Verificando se o email esta cadastrado
	$s = "SELECT uid FROM ".PFIX."user_login WHERE email='$email' ";
	
	$r = $Qry->query($s);
	$l = $Qry->rows($r);
	
	if($l==1){
		$arr = $Qry->arr($r);
		if(redefinirSenha($arr[0]['uid'],$email)){
			$output = $msg[130];
		}else{
			$output = $msg[132];
		}
	}else{
		$output = $msg[131];
	}
	
	//Desconectando o banco
	$Conn->desconnect($c);
?>