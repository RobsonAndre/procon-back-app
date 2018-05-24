<?php
	include("../config/config.php");
	/** /
	echo "<br />".$token;
	echo "<br />".$ldias;
	echo "<br />".$time;
	/**/
	//Validação do tokem
	$tk  = new Token;
	$cod = $tk->validaToken(KEY,$token,$ldias,$time); 
	if($cod==102){
		if($action==1){
			include("./listar.php");
		}else{
			$output = $msg[101];
		}
	}else{
		$output = $msg[$cod];
	}
	echo json_encode($output);
?>