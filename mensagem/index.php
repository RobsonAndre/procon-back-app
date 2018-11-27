<?php
	include("../config/config.php");
	//Validação do tokem
	$tk  = new Token;
	$cod = $tk->validaToken(KEY,$token,$ldias,$time); 
	if($cod==102){
		if($action==1){
			include("./enviar.php");
		}elseif($action==2){
                        include("./listar.php");
		}elseif($action==3){
			include("./ler.php");
		}elseif($action==4){
			include("./tipos.php");
		}elseif($action==5){
			include("./cancelar.php");
		}else{
			$output = $msg[101];
		}
	}else{
		$output = $msg[$cod];
	}
	echo json_encode($output);
