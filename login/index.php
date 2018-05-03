<?php
	include("../config/headers.php");
	include("../config/defines.php");
	include("../config/connect.php");
	include("../config/query.php");
	include("../config/token.php");
	include("../config/mensagens.php");
	include("../config/vars.php");
	
	$tk = new Token;
	
	$authentic = $tk->validaToken(KEY,$uid,$social,$token); 
	/** /
	//nao existe usuario autenticado durante o login	
	if(!$authentic){
		$output = $msg[100];
	}else
	/**/
	if($action==1){
		include("./valida.php");
	}else{
		$output = $msg[101];
	}
	echo json_encode($output);
?>