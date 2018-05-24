<?php
	include('../config/mensagens.php');
        //extra
        //nome 
	$msg[121]['info'][0] = 'Nome em branco ou inválido, digite seu nome completo.';
	//cpf
	$msg[121]['info'][1] = 'CPF em branco ou inválido.';
	//email
	$msg[121]['info'][2] = 'E-mail em branco ou inválido.';
	//senha
	$msg[121]['info'][3] = 'Senha em branco ou inválida, a senha deve conter de 8 a 15 caracteres.';
	//termo
	$msg[121]['info'][4] = 'Termo de uso e Política de Privacidade não lidos e não aceitos.';
	//cpf cadastrado
	$msg[121]['info'][5] = "O CPF ".$cpf." já esta cadastrado, tente recuperar a senha.";
	//email cadastrado
	$msg[121]['info'][6] = "O E-mail ".$email." já esta cadastrado, tente recuperar a senha.";
	//erro interno - não deve ocorrer, existe apenas por segurança
	$msg[121]['info'][7] = "Erro ao gerar o UID, tente novamente.";
	$msg[121]['info'][8] = "Erro ao tentar gerar o UID, tente novamente.";
	$msg[121]['info'][9] = "Erro de acesso ao banco de dados, tente novamente.";
           
	$m = $_GET['m'];
	echo json_encode($msg[$m]);
?>