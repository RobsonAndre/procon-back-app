<?php

function enviarEmail($email, $nome, $msg, $ass) {
    //$enviado = true;
    // Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
    require("../assets/PHPMailer-5.2.21/class.phpmailer.php");
    require("../assets/PHPMailer-5.2.21/class.smtp.php");
    // Inicia a classe PHPMailer
    $mail = new PHPMailer();
    
    // Define que a mensagem será enviada com o protocolo SMTP
    $mail->isSMTP();
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
    $mail->FromName = "Procon na mão";
    // Define os destinatário(s)
    $mail->AddAddress($email, $nome);
    // Charset da mensagem (opcional)
    $mail->CharSet = 'UTF-8';
    $mensagemHTML = $msg;
    // Configura a mensagem em HTML (opcional)
    $mail->IsHTML(true);
    // Define a mensagem (Texto e Assunto)
    $mail->Subject = $ass;
    $mail->Body = $mensagemHTML;
    $mail->AltBody = trim(strip_tags($mensagemHTML));
    
    return $mail->Send();
}
