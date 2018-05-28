<?php

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
	$mail->FromName = "Papiro Web";

	// Define os destinatário(s)
	$mail->AddAddress('robson_x@yahoo.com.br', 'Robson Andre');

	// Charset da mensagem (opcional)
	$mail->CharSet = 'UTF-8';

	$mensagemHTML = "<center> Teste de envio de e-mail com phpMailer relizado com sucesso.</center>";

	// Configura a mensagem em HTML (opcional)
	$mail->IsHTML(true);

	// Define a mensagem (Texto e Assunto)
	$mail->Subject = "Assunto da Mensagem";
	$mail->Body =$mensagemHTML;
	$mail->AltBody = trim(strip_tags($mensagemHTML));
	$enviado = $mail->Send();
	// Exibe uma mensagem de resultado
	if ($enviado) {
		echo "<center>E-mail enviado com sucesso!</center>"; 
	} else {
		echo "Não foi possível enviar o e-mail.<br /><br />";
		echo "<b>Informações do erro:</b> <br />" . $mail->ErrorInfo;
	}
?>