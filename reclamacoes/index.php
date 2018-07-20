<?php
	include("../config/config.php");
	//Validação do tokem
	$tk  = new Token;
	$cod = $tk->validaToken(KEY,$token,$ldias,$time); 
	if($cod==102){
		if($action==1){
			include("./listar.php");
		}elseif($action==2){
			include("./gravar.php");
		}elseif($action==3){
			include("./contar.php");
		}elseif($action==4){
			include("./listar_minhas.php");
		}elseif($action==5){
			include("./mostrar.php");
		}else{
			$output = $msg[101];
		}
	}else{
		$output = $msg[$cod];
	}
	echo json_encode($output);