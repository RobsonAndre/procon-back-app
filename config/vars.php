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
	/*echo '<br />'.*/$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_NUMBER_INT);
	/**
	 *	email
	 *		endereco de correio eletronico
	 *	tipo: string
	 *  
	 */
	/*echo '<br />'.*/$email = validaEmail(filter_input(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL));
	
	/**
	 *	psw 
	 *		palavra chave do usuario (senha) ja criptografada
	 *	tipo: string
	 *  
	 */
	/*echo '<br />'.*/$senha = validaSenha(filter_input(INPUT_GET, 'senha', FILTER_SANITIZE_STRING));
	
	/**
	 *	nome
	 *		nome completo
	 *	tipo: string
	 *  
	 */
	/*echo '<br />'.*/$nome = validaNome(filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_STRING));
	
	/**
	 *	cpf 
	 *		cadastro de pessoa fisica
	 *	descricao
	 *		Identificador unico da pessoa fisica composta por 11 digitos
	 *	exemplo
	 *		012345678950
	 */
	/*echo '<br />'.*/$cpf  = validaCPF(filter_input(INPUT_GET, 'cpf', FILTER_SANITIZE_NUMBER_INT));
	
        /**
	 *	termo 
	 *		temo de uso e politica de privacidade
	 *	descricao
	 *		confirmacao de aceitacao do termo e da politica de privacidade
	 *	tipo
	 *		boolean/int
         *              1 sim | 0 nao
	 */
	/*echo '<br />'.*/ $termo  = filter_input(INPUT_GET, 'termo', FILTER_SANITIZE_NUMBER_INT);
	
        /**
	 *	imagem
	 *		url da imagem
	 *	tipo: string
	 *  
	 */
	/*echo '<br />'.*/$imagem = filter_input(INPUT_GET, 'termo', FILTER_SANITIZE_URL);
		
	/**
	 *	sexo
	 *		sexo 
	 *	tipo: string
	 *  predefinido: male|female
	 */
	/*echo '<br />'.*/$sexo = filter_input(INPUT_GET, 'sexo', FILTER_SANITIZE_STRING);
	
	/**
	 *	cover
	 *          imagem de fundo do facebook 
	 *	tipo
         *          url/string
	 */
	/*echo '<br />'.*/$cover = filter_input(INPUT_GET, 'cover', FILTER_SANITIZE_URL);
		
	/**
	 *	pnome
	 *		primeiro nome 
	 *	tipo: string
	 */
	/*echo '<br />'.*/$pnome = filter_input(INPUT_GET, 'pnome', FILTER_SANITIZE_STRING);
		
	/**
	 *	snome
	 *		sobre nome 
	 *	tipo: string
	 */
	/*echo '<br />'.*/$snome = filter_input(INPUT_GET, 'snome', FILTER_SANITIZE_STRING);
		
	/**
	 *	fidade
	 *		faixa de idade, range_age no facebook 
	 *	tipo: string
	 */
	/*echo '<br />'.*/$fidade = filter_input(INPUT_GET, 'fidade', FILTER_SANITIZE_STRING);
	
	/**
	 *	link
	 *		link no facebook 
	 *	tipo: url/string
	 */
	/*echo '<br />'.*/$link = filter_input(INPUT_GET, 'link', FILTER_SANITIZE_URL);
	
	/**
	 *	localidade
	 *		locale no facebook 
	 *	tipo: string
	 */
	/*echo '<br />'.*/$localidade = filter_input(INPUT_GET, 'localidade', FILTER_SANITIZE_STRING);
	
	/**
	 *	timezone
	 *		time no facebook 
	 *	tipo: string
	 */
	/*echo '<br />'.*/$timezone = filter_input(INPUT_GET, 'timezone', FILTER_SANITIZE_STRING);
	
	/**
	 *	atualizado
	 *		updated_time no facebook 
	 *	tipo: string
	 */
	/*echo '<br />'.*/$atualizado = filter_input(INPUT_GET, 'atualizado', FILTER_SANITIZE_STRING);
	
	/**
	 *	verificado
	 *		verified no facebook 
	 *	tipo: string
	 */
	/*echo '<br />'.*/$verificado = filter_input(INPUT_GET, 'verificado', FILTER_SANITIZE_STRING);
	
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
	/*echo '<br />'.*/$order = filter_input(INPUT_GET, 'order', FILTER_SANITIZE_STRING);
		
	/**
	 *	token
	 *          identificado enviado pelo sistema popcine para o usuário autenticado
	 */
	/*echo '<br />'.*/ $token  = filter_input(INPUT_GET, 'token', FILTER_SANITIZE_STRING);//$_GET['token'] ? $_GET['token'] : false;
        
        /**
	 *	uid
	 *          uid da rede social que foi autenticado
	 */
	/*echo '<br />'.*/ $uidtmp = filter_input(INPUT_GET, 'uid', FILTER_SANITIZE_STRING);//$_GET['uid'] ? $_GET['uid'] : ($_GET['token'] ? pegarUID($_GET['token']) : false) ;
	/*echo '<br />'.*/ $uid = $uidtmp ? $uidtmp : ($token ? pegarUID($token) : false) ;
	      
	/**
	 *	social
	 *		corresponde a rede social que o usuario usou para se autenticar
	 * 	tipo: string
	 *	tamanho: 32 caracteres
	 */
	/*echo '<br />'.*/ $socialtmp = filter_input(INPUT_GET, 'social', FILTER_SANITIZE_STRING);
        /*echo '<br />'.*/ $social = $socialtmp ? $socialtmp: 'integra';
	
	/**
	 *	ind_estabelecimento
	 *		primary key da tabela integra_base_reclamacao_estabelecimento
	 */
	/*echo '<br />'.*/ $ind_estabelecimento  = filter_input(INPUT_GET, 'estabelecimento', FILTER_SANITIZE_NUMBER_INT);//$_GET['estabelecimento'] ? $_GET['estabelecimento'] : 0;

	/**
	 *	ind_tipo
	 *		primary key da tabela: 
	 			integra_base_reclamacao_tipo
	 */
	/*echo '<br />'.*/ $ind_tipo = filter_input(INPUT_GET, 'tipo', FILTER_SANITIZE_NUMBER_INT);//$_GET['tipo'] ? $_GET['tipo'] : 0;

	/**
	 *	banco
	 *		nome do estabelecimento financeiro 
	 *	tipo
	 *		String
	 */
	/*echo '<br />'.*/ $banco  = filter_input(INPUT_GET, 'banco', FILTER_SANITIZE_STRING);//$_GET['banco'] ? $_GET['banco'] : false;

	/**
	 *	agencia
	 *		identificado da agencia bancaria 
	 *	tipo
	 *		String
	 */
	/*echo '<br />'.*/ $agencia  = filter_input(INPUT_GET, 'agencia', FILTER_SANITIZE_STRING);//$_GET['agencia'] ? $_GET['agencia'] : false;

	/**
	 *	data
	 *		data da ocorrencia 
	 *	tipo
	 *		String
	 *  formato 
	 *		01-01-2018 (dd-mm-aaaa)
	 */
	/*echo '<br />'.*/ $data  = filter_input(INPUT_GET, 'data', FILTER_SANITIZE_STRING);//$_GET['data'] ? $_GET['data'] : false;
	
        /**
	 *	hora
	 *		hora da ocorrencia 
	 *	tipo
	 *		String
	 *	formato
	 *		23-15-45 (h-m-s)
	 */
	/*echo '<br />'.*/ $hora  = filter_input(INPUT_GET, 'hora', FILTER_SANITIZE_STRING);//$_GET['hora'] ? $_GET['hora'] : false;

	/**
	 *	espera
	 *		tempo de espera em minutos 
	 *	tipo
	 *		inteiro
	 *	exemplo
	 *		198 (3 hora e 18 minutos)
	 */
	/*echo '<br />'.*/ $espera  = filter_input(INPUT_GET, 'espera', FILTER_SANITIZE_NUMBER_INT);//$_GET['espera'] ? $_GET['espera'] : 0;

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
	/*echo '<br />'.*/ $atendido  = filter_input(INPUT_GET, 'atendido', FILTER_SANITIZE_NUMBER_INT);//$_GET['atendido'] ? $_GET['atendido'] : 0;
	
	/**
	 *	queixa
	 *		descricao em texto simple da situacao pelo quixoso 
	 *	tipo
	 *		string
	 */
	/*echo '<br />'.*/ $queixa  = filter_input(INPUT_GET, 'queixa', FILTER_SANITIZE_STRING);//$_GET['queixa'] ? $_GET['queixa'] : false;
	
	/**
	 *	anexos
	 *		texto em formmato de url separado por virgula (,) 
	 *	tipo
	 *		string
	 */
	/*echo '<br />'.*/ $anexos  = filter_input(INPUT_GET, 'anexos', FILTER_SANITIZE_STRING);//$_GET['anexos'] ? $_GET['anexos'] : false;
        
        /**
	 *	code
	 *		define o codigo do status da reclamação 
	 *	tipo
	 *		inteiro
	 */
	/*echo '<br />'.*/ $code  = filter_input(INPUT_GET, 'code', FILTER_SANITIZE_NUMBER_INT);//$_GET['code'] ? $_GET['code'] : 0;
	
	/**
	 *	reclamacao
	 *		primary key da tabela de reclamações 
	 *	tipo
	 *		inteiro
	 */
	/*echo '<br />'.*/ $reclamacao  = filter_input(INPUT_GET, 'reclamacao', FILTER_SANITIZE_NUMBER_INT);//$_GET['reclamacao'] ? $_GET['reclamacao'] : 0;
	
?>