<?php
	include("../assets/PHPMailer_5.2.21/class.phpmailer.php");
	
	function redefinirSenha($uid, $email){
		/** /
		echo '<br />uid: '.$uid;
		echo '<br />email: '.$email;
		/**/
		
		$time     = base64_encode(time());
		$codUid   = base64_encode($uid);
		$codEmail = sha1($emai);
		
		$token    = base64_encode($time.'-'.$codUid.'-'.$codEmail);
		
		$path 	  = "http://papiroweb.com.br/integra/"; 
		$url      = $path."redefinirsenha/?token=".$token."&email=".$email."&";
		
		
		/**/
		// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
		require("../assets/PHPMailer-5.2.21/class.phpmailer.php");
		require("../assets/PHPMailer-5.2.21/class.smtp.php");
		
		// Inicia a classe PHPMailer
		$mail = new PHPMailer();
		
		// Define que a mensagem será enviada com o protocolo SMTP
		$mail->IsSMTP();
		
		// Endereço do servidor SMTP (utilizando autenticação)
		$mail->Host = "smtp.bs2.com.br";
		
		// Usar autenticação SMTP 
		$mail->SMTPAuth = true;
		
		// Usuário do servidor SMTP (endereço de email)
		$mail->Username = 'contato@papiroweb.com.br';
		
		// Senha do servidor SMTP (senha do email usado)
		$mail->Password = 'papiroweb@12';
		
		// Define o remetente
		$mail->From = "contato@papiroweb.com.br";
		$mail->FromName = "inTegra-teste";
		
		// Define os destinatário(s)
		$mail->AddAddress('robson_x@yahoo.com.br', 'Robson Andre');
		
		// Charset da mensagem (opcional)
		$mail->CharSet = 'UTF-8';
		
		$mensagemHTML = '<div>Para redefinir a senha, <a href="'.$url.'" target="_blank">click aqui</a> </div>';
		
		// Configura a mensagem em HTML (opcional)
		$mail->IsHTML(true);
		
		// Define a mensagem (Texto e Assunto)
		$mail->Subject = "Recuperar Senha";
		$mail->Body =$mensagemHTML;
		$mail->AltBody = trim(strip_tags($mensagemHTML));
		$enviado = $mail->Send();
		
		return($enviado);
	}
?>