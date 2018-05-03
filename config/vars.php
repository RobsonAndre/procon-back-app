<?php
	/**
	 *	time
	 *	data e hora no formato timestamp
	 */
	$time = time();
	
	/**
	 *	ldias
	 *		limite em dias para que o usuario permanessa logado
	 *		Apos o limite definido em ldias deve ser solicitado novo login
	 *		segudos * minutos * horas * dias
	 */
	$ldias = 60*60*24*30; //30 dias
	
	/**
	 *	Action
	 *	Acão a ser realisada, item pode ser comentario, etiqueta e outros
	 * 		1 - inserir uma item
	 *		2 - remover uma item
	 *		3 - seleciona uma item
	 *		4 - contar as linhas de registro
	 *		5 - Selecionar todos os registros
	 */
	/*echo '<br />'.*/$action = $_GET['action'];
	
	/**
	 *	email
	 *		endereco de correio eletronico
	 *	tipo: string
	 *  
	 */
	/*echo '<br />'.*/$email = $_GET['email']?$_GET['email']:false;
	if(!filter_var( $email, FILTER_VALIDATE_EMAIL)){
		$email = false;
	}
	
	/**
	 *	senha
	 *		palavra chave do usuario
	 *	tipo: string
	 *  
	 */
	/*echo '<br />'.*/$senha = $_GET['senha'] ? $_GET['senha'] : false;
	
	/**
	 *	psw
	 *		senha criptografada
	 *	tipo: string
	 *  
	 */
	/*echo '<br />'.*/$psw = crypt($senha, '$'.METH.'$'.COAST.'$'.SALT.'$');
	
	/**
	 *	nome
	 *		nome completo
	 *	tipo: string
	 *  
	 */
	/*echo '<br />'.*/$nome = $_GET['nome'] ? $_GET['nome'] : false;
		
	/**
	 *	imagem
	 *		url da imagem
	 *	tipo: string
	 *  
	 */
	/*echo '<br />'.*/$imagem= $_GET['imagem']?$_GET['imagem']:false;
		
	/**
	 *	sexo
	 *		sexo 
	 *	tipo: string
	 *  predefinido: male|female
	 */
	/*echo '<br />'.*/$sexo= $_GET['sexo']?$_GET['sexo']:false;
	
	/**
	 *	cover
	 *		imagem de fundo do facebook 
	 *	tipo: string
	 */
	/*echo '<br />'.*/$cover= $_GET['cover']?$_GET['cover']:false;
		
	/**
	 *	pnome
	 *		primeiro nome 
	 *	tipo: string
	 */
	/*echo '<br />'.*/$pnome= $_GET['pnome']?$_GET['pnome']:false;
		
	/**
	 *	snome
	 *		sobre nome 
	 *	tipo: string
	 */
	/*echo '<br />'.*/$snome= $_GET['snome']?$_GET['snome']:false;
		
	/**
	 *	fidade
	 *		faixa de idade, range_age no facebook 
	 *	tipo: string
	 */
	/*echo '<br />'.*/$fidade = $_GET['fidade']?$_GET['fidade']:false;
	
	/**
	 *	link
	 *		link no facebook 
	 *	tipo: string
	 */
	/*echo '<br />'.*/$link = $_GET['link']?$_GET['link']:false;
	
	/**
	 *	localidade
	 *		locale no facebook 
	 *	tipo: string
	 */
	/*echo '<br />'.*/$localidade = $_GET['localidade']?$_GET['localidade']:false;
	
	/**
	 *	timezone
	 *		time no facebook 
	 *	tipo: string
	 */
	/*echo '<br />'.*/$timezone = $_GET['timezone']?$_GET['timezone']:false;
	
	/**
	 *	atualizado
	 *		updated_time no facebook 
	 *	tipo: string
	 */
	/*echo '<br />'.*/$atualizado = $_GET['atualizado']?$_GET['atualizado']:false;
	
	/**
	 *	verificado
	 *		verified no facebook 
	 *	tipo: string
	 */
	/*echo '<br />'.*/$verificado = $_GET['verificado']?$_GET['verificado']:false;
	
	/**
	 *	quantidade
	 *		Define a quantidade de item (linha) mostrada por pagina
	 *	tipo: interger
	 *  predefinida: 20 linhas
	 */
	/*echo '<br />'.*/$qtde = 10;
		
	/**
	 *	order
	 *		define a ordem de apresentacao
	 *	tipo: string
	 *  predefinida: ASC | DESC
	 */
	/*echo '<br />'.*/$order = $_GET['order']? $_GET['order'] :'DESC';
		
	/**
	 *	uid
	 *		uid da rede social que foi autenticado
	 */
	/*echo '<br />'.*/ $uid = $_GET['uid'] ? $_GET['uid'] : false ;
	
	/**
	 *	social
	 *		corresponde a rede social que o usuario usou para se autenticar
	 * 	tipo: string
	 *	tamanho: 32 caracteres
	 */
	/*echo '<br />'.*/ $social = $_GET['social'] ? $_GET['social']: 'integra';
	
	/**
	 *	tokem
	 *		identificado enviado pelo sistema popcine para o usuário autenticado
	 */
	/*echo '<br />'.*/ $token  = $_GET['token'] ? $_GET['token'] : false;

?>