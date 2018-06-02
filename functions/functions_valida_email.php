<?php
	function validaEmail($email){
		//Tranforma tudo em minusculo antes da validacao.
		$email = strtolower($email);
		//Valida e-mail
		if(!filter_var( $email, FILTER_VALIDATE_EMAIL)){
			$email = false;
		}
		return $email;
	}
?>