<?php
	/**
	 *	time
	 *	data e hora no formato timestamp
	 */
	/*echo '<br />'.*/$time = time();
	
	/**
	 *	validate
	 *	variavel de controle define se ha algum erro (false) ou se tudo esta ok (true) padrão false
	 *	bollean
	 */
	/*echo '<br />'.*/$validate = false;
	
	/**
	 *	ldias
	 *		limite em dias para que o usuario permanessa logado
	 *		Apos o limite definido em ldias deve ser solicitado novo login
	 *		segudos * minutos * horas * dias
	 */
	/*echo '<br />'.*/$ldias = 60*60*24*30; //30 dias
	
	/**
	 *	Action
	 *	Acão a ser realisada, item pode ser comentario, etiqueta e outros
	 * 		1 - inserir uma item
	 *		2 - remover uma item
	 *		3 - seleciona uma item
	 *		4 - contar as linhas de registro
	 *		5 - Selecionar todos os registros
	 */
	/*echo '<br />'.*/$action = $_GET['action']?$_GET['action']:0;
	
	/**
	 *	email
	 *		endereco de correio eletronico
	 *	tipo: string
	 *  
	 */
	/*echo '<br />'.*/$email = $_GET['email']? validaEmail($_GET['email']):false;
	
	/**
	 *	psw 
	 *		palavra chave do usuario (senha) ja criptografada
	 *	tipo: string
	 *  
	 */
	/*echo '<br />'.*/$senha = $_GET['senha'] ? validaSenha($_GET['senha']): false;
	
	/**
	 *	nome
	 *		nome completo
	 *	tipo: string
	 *  
	 */
	/*echo '<br />'.*/$nome = $_GET['nome'] ? validaNome($_GET['nome']) : false;
	
	/**
	 *	cpf 
	 *		cadastro de pessoa fisica
	 *	descricao
	 *		Identificador unico da pessoa fisica composta por 11 digitos
	 *	exemplo
	 *		012345678950
	 */
	/*echo '<br />'.*/ $cpf  = $_GET['cpf'] ? validaCPF($_GET['cpf']) : false;
	
	/**
	 *	termo 
	 *		temo de uso e politica de privacidade
	 *	descricao
	 *		confirmacao de aceitacao do termo e da politica de privacidade
	 *	tipo
	 *		boolean/int
         *              1 sim | 0 nao
	 */
	/*echo '<br />'.*/ $termo  = $_GET['termo'] ? $_GET['termo'] : 0;
	
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
	/*echo '<br />'.*/ $uid = $_GET['uid'] ? $_GET['uid'] : ($_GET['token'] ? pegarUID($_GET['token']) : false) ;
	
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

	/**
	 *	ind_estabelecimento
	 *		primary key da tabela integra_base_reclamacao_estabelecimento
	 */
	/*echo '<br />'.*/ $ind_estabelecimento  = $_GET['estabelecimento'] ? $_GET['estabelecimento'] : 0;

	/**
	 *	ind_tipo
	 *		primary key da tabela: 
	 			integra_base_reclamacao_tipo
	 */
	/*echo '<br />'.*/ $ind_tipo  = $_GET['tipo'] ? $_GET['tipo'] : 0;

	/**
	 *	banco
	 *		nome do estabelecimento financeiro 
	 *	tipo
	 *		String
	 */
	/*echo '<br />'.*/ $banco  = $_GET['banco'] ? $_GET['banco'] : false;

	/**
	 *	agencia
	 *		identificado da agencia bancaria 
	 *	tipo
	 *		String
	 */
	/*echo '<br />'.*/ $agencia  = $_GET['agencia'] ? $_GET['agencia'] : false;

	/**
	 *	data
	 *		data da ocorrencia 
	 *	tipo
	 *		String
	 *  formato 
	 *		01-01-2018 (dd-mm-aaaa)
	 */
	/*echo '<br />'.*/ $data  = $_GET['data'] ? $_GET['data'] : false;
	
	/**
	 *	hora
	 *		hora da ocorrencia 
	 *	tipo
	 *		String
	 *	formato
	 *		23-15-45 (h-m-s)
	 */
	/*echo '<br />'.*/ $hora  = $_GET['hora'] ? $_GET['hora'] : false;

	/**
	 *	espera
	 *		tempo de espera em minutos 
	 *	tipo
	 *		inteiro
	 *	exemplo
	 *		198 (3 hora e 18 minutos)
	 */
	/*echo '<br />'.*/ $espera  = $_GET['espera'] ? $_GET['espera'] : 0;

	/**
	 *	atendido
	 *		define se o usuário aguardou o atendimento ou desistiu 
	 *	tipo
	 *		boolean/inteiro
	 *	exemplo
	 *		1/Sim 
	 *		0/Nao (padrao)
	 *		
	 */
	/*echo '<br />'.*/ $atendido  = $_GET['atendido'] ? $_GET['atendido'] : 0;
	
	/**
	 *	queixa
	 *		descricao em texto simple da situacao pelo quixoso 
	 *	tipo
	 *		string
	 */
	/*echo '<br />'.*/ $queixa  = $_GET['queixa'] ? $_GET['queixa'] : false;
	
	/**
	 *	anexos
	 *		texto em formmato de url separado por virgula (,) 
	 *	tipo
	 *		string
	 */
	/*echo '<br />'.*/ $anexos  = $_GET['anexos'] ? $_GET['anexos'] : false;

	/**
	 *	code
	 *		define o codigo do status da reclamação 
	 *	tipo
	 *		inteiro
	 */
	/*echo '<br />'.*/ $code  = $_GET['code'] ? $_GET['code'] : 0;
	
	/**
	 *	reclamacao
	 *		primary key da tabela de reclamações 
	 *	tipo
	 *		inteiro
	 */
	/*echo '<br />'.*/ $reclamacao  = $_GET['reclamacao'] ? $_GET['reclamacao'] : 0;
	
?>