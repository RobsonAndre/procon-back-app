<?php
	require("../assets/PHPMailer-5.2.21/class.phpmailer.php");
	require("../assets/PHPMailer-5.2.21/class.smtp.php");

	$smtp = new SMTP;

	if (!$smtp->connect( 'smtp.bs2.com.br', '587' ) ) {
    	echo '<br>Erro: connect';
	}else{
		echo '<br>Sucesso: connect';
	}
	if ( !$smtp->startTLS() ) {
    	echo '<br>Erro:  TLS';
	}else{
		echo '<br>Sucesso:  TLS';
	}
	
	if ( !$smtp->hello(gethostname()) ) {
    	echo '<br>Erro:  hello';
	}else{
		echo '<br>Sucesso:  hello';
	}
	
	if ( !$smtp->authenticate( 'contato@papiroweb.com.br', 'papiroweb@12' ) ) {
    	echo '<br>Erro:  Auth';
	}else{
		echo '<br>Sucesso:  Auth';
	}
?>