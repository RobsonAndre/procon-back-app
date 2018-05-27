<?php
	//Sistema
	$msg[100] = array('status_code'=>100,'status_message'=>'Erro: usuário não autenticado.','success'=>false);
	$msg[101] = array('status_code'=>101,'status_message'=>'Erro: ação desconhecida.','success'=>false);
	$msg[102] = array('status_code'=>102,'status_message'=>'Sucesso: Token Ok.','success'=>true);
	$msg[103] = array('status_code'=>103,'status_message'=>'Erro: Token expirou.','success'=>false);

	//Login
	$msg[110] = array('status_code'=>110,'status_message'=>'Sucesso: Autenticação realizada com sucesso.','success'=>true);	
	$msg[111] = array('status_code'=>111,'status_message'=>'Erro: Usuário e/ou senha incorreto(s).','success'=>false);	

	//Cadastro
	$msg[120] = array('status_code'=>120,'status_message'=>'Sucesso: Cadastro realizado, você já pode logar no App.','success'=>true);
	$msg[121] = array('status_code'=>121,'status_message'=>'Erro: Cadastro não realizado.','success'=>false,'info'=>'');

	//Senha redefinir
	$msg[130] = array('status_code'=>130,'status_message'=>'Sucesso: Foi enviado um e-mail para "'. $email .'" com as instruções para redefinir a senha.','success'=>true);	
	$msg[131] = array('status_code'=>131,'status_message'=>'Erro: E-mail ou CPF não cadastrado.','success'=>false);	
	$msg[132] = array('status_code'=>132,'status_message'=>'Erro: Não foi possível redefinir a senha, tente mais tarde.','success'=>false);	
	$msg[133] = array('status_code'=>133,'status_message'=>'Erro: Não foi possível enviar o e-mail, tente mais tarde.','success'=>false);	

	//Estabelecimentos
	$msg[200] = array('status_code'=>200,'status_message'=>'Sucesso: Lista de estabelecimentos gerada.','success'=>true);
	$msg[201] = array('status_code'=>201,'status_message'=>'Erro: Impossível gerar a lista de estabelecimentos.','success'=>false);
	
	//Reclamacoes
	$msg[210] = array('status_code'=>210,'status_message'=>'Sucesso: Lista de reclamações gerada.','success'=>true);
	$msg[211] = array('status_code'=>211,'status_message'=>'Erro: Impossível gerar a lista de reclamações.','success'=>false);
	$msg[212] = array('status_code'=>212,'status_message'=>'Sucesso: Reclamações gravada.','success'=>true);
	$msg[213] = array('status_code'=>213,'status_message'=>'Erro: Impossível gravar a reclamação.','success'=>false);
	$msg[214] = array('status_code'=>214,'status_message'=>'Sucesso: Reclamações contadas.','success'=>true);
	$msg[215] = array('status_code'=>215,'status_message'=>'Erro: Impossível contar as reclamações.','success'=>false);
	$msg[216] = array('status_code'=>216,'status_message'=>'Sucesso: Reclamações Listadas.','success'=>true);
	$msg[217] = array('status_code'=>217,'status_message'=>'Erro: Impossível listar as reclamações.','success'=>false);
	$msg[218] = array('status_code'=>218,'status_message'=>'Sucesso: Reclamação encontrada.','success'=>true);
	$msg[219] = array('status_code'=>219,'status_message'=>'Erro: Impossível encontrar a reclamação.','success'=>false);
	
?>