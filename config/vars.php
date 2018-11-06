<?php
/**
 *  ip
 *      endereco de ip do cliente
 *  tipo
 *      string / ip
 *  formato
 *      123.123.123.123
 */
$ip = $_SERVER['REMOTE_ADDR'];
/**
 *  time
 *      data e hora no formato timestamp
 *  tipo
 *      timestamp
 */
/* echo '<br />'. */$time = time();

/**
 *  validate
 *      variavel de controle define se ha algum erro (false) ou se tudo esta ok (true) padrão false
 *  tipo    
 *      bollean
 */
/* echo '<br />'. */$validate = false;

/**
 *  ldias
 *      limite em dias para que o usuario permanessa logado
 * 	Apos o limite definido em ldias deve ser solicitado novo login
 * 	segudos * minutos * horas * dias
 */
/* echo '<br />'. */$ldias = 60 * 60 * 24 * 30; //30 dias

/**
 *  Action
 *      Acão a ser realizada
 *  tipo
 *      integer
 */
/* echo '<br />'. */$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_NUMBER_INT);
/**
 * email
 *      endereco de correio eletronico
 * 	tipo: string
 *  
 */
/* echo '<br />'. */$email = validaEmail(filter_input(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL));

/**
 *  senha
 *      palavra chave do usuario
 *  tipo
 *      string
 */
/* echo '<br />'. */$senha = validaSenha(filter_input(INPUT_GET, 'senha', FILTER_SANITIZE_STRING));

/**
 *  nsenha
 *      nova palavra chave do usuario
 *  tipo
 *      string
 */
/* echo '<br />'. */$nsenha = validaSenha(filter_input(INPUT_GET, 'nsenha', FILTER_SANITIZE_STRING));

/**
 *  nome
 *      nome completo
 *  tipo
 *      string
 */
/* echo '<br />'. */$nome = validaNome(filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_STRING));

/**
 *  cpf 
 * 	cadastro de pessoa fisica
 *  descricao
 *      Identificador unico da pessoa fisica composta por 11 digitos
 *  tipo
 *      integer
 *  exemplo
 *      012345678950
 */
/* echo '<br />'. */$cpf = validaCPF(filter_input(INPUT_GET, 'cpf', FILTER_SANITIZE_NUMBER_INT));
//permite fazer o login com o cpf alem do e-mail
if(!$cpf){
    $cpf = validaCPF(filter_input(INPUT_GET, 'email', FILTER_SANITIZE_NUMBER_INT));
}

/**
 *  termo 
 *      temo de uso e politica de privacidade
 *  descricao
 *      confirmacao de aceitacao do termo e da politica de privacidade
 *  tipo
 *      boolean/int
 *  exemplo
 *      1 sim | 0 nao
 */
/* echo '<br />'. */ $termo = filter_input(INPUT_GET, 'termo', FILTER_SANITIZE_NUMBER_INT);

/**
 *  imagem
 *      url da imagem
 *  tipo
 *      string
 */
/* echo '<br />'. */$imagem = filter_input(INPUT_GET, 'imagem', FILTER_SANITIZE_URL);

/**
 * nasc
 *      data de nascimento 
 * tipo 
 *      string
 * exemplo
 *      01-01-2001
 */
/* echo '<br />'. */$nasc = validaNascimento(filter_input(INPUT_GET, 'nasc', FILTER_SANITIZE_STRING));

/**
 * sexo
 *      sexo 
 * tipo 
 *      string
 * exemplo
 *      male     |female
 *      masculino|feminino
 *      m        |f
 */
/* echo '<br />'. */$sexo = filter_input(INPUT_GET, 'sexo', FILTER_SANITIZE_STRING);

/**
 *  cover
 *      imagem de fundo do facebook 
 *  tipo
 *      url/string
 */
/* echo '<br />'. */$cover = filter_input(INPUT_GET, 'cover', FILTER_SANITIZE_URL);

/**
 *  pnome
 *      primeiro nome 
 *  tipo
 *      string
 */
/* echo '<br />'. */$pnome = filter_input(INPUT_GET, 'pnome', FILTER_SANITIZE_STRING);

/**
 *  snome
 *      sobre nome 
 *  tipo
 *      string
 */
/* echo '<br />'. */$snome = filter_input(INPUT_GET, 'snome', FILTER_SANITIZE_STRING);

/**
 *  fidade
 *      faixa de idade, range_age no facebook 
 *  tipo
 *      string
 */
/* echo '<br />'. */$fidade = filter_input(INPUT_GET, 'fidade', FILTER_SANITIZE_STRING);

/**
 *  link
 *      link no facebook 
 *  tipo
 *      url/string
 */
/* echo '<br />'. */$link = filter_input(INPUT_GET, 'link', FILTER_SANITIZE_URL);

/**
 *  localidade
 *      locale no facebook 
 *  tipo
 *      string
 */
/* echo '<br />'. */$localidade = filter_input(INPUT_GET, 'localidade', FILTER_SANITIZE_STRING);

/**
 *  timezone
 *      time no facebook 
 *  tipo
 *      string
 */
/* echo '<br />'. */$timezone = filter_input(INPUT_GET, 'timezone', FILTER_SANITIZE_STRING);

/**
 *  atualizado
 *      updated_time no facebook 
 *  tipo
 *      string
 */
/* echo '<br />'. */$atualizado = filter_input(INPUT_GET, 'atualizado', FILTER_SANITIZE_STRING);

/**
 *  verificado
 *      verified no facebook 
 *  tipo
 *      string
 */
/* echo '<br />'. */$verificado = filter_input(INPUT_GET, 'verificado', FILTER_SANITIZE_STRING);

/**
 *  quantidade
 *      Define a quantidade de item (linha) mostrada por pagina
 *  tipo
 *      interger
 *  predefinida: 20 linhas
 */
/* echo '<br />'. */$qtde = 20;

/**
 *  order
 *      define a ordem de apresentacao
 *  tipo 
 *      string
 *  exemplo
 *      ASC | DESC
 */
/* echo '<br />'. */$order = filter_input(INPUT_GET, 'order', FILTER_SANITIZE_STRING);

/**
 *  token
 *      identificado enviado pelo sistema popcine para o usuário autenticado
 */
/* echo '<br />'. */ $token = filter_input(INPUT_GET, 'token', FILTER_SANITIZE_STRING); 

/**
 *  uid
 *      uid da rede social que foi autenticado
 */
/* echo '<br />'. */ $uidtmp = filter_input(INPUT_GET, 'uid', FILTER_SANITIZE_STRING); 
/* echo '<br />'. */ $uid = $uidtmp ? $uidtmp : ($token ? pegarUID($token) : false);

/**
 *  social
 *      corresponde a rede social que o usuario usou para se autenticar
 *  tipo
 *      string
 *  tamanho
 *      32 caracteres
 */
/* echo '<br />'. */ $socialtmp = filter_input(INPUT_GET, 'social', FILTER_SANITIZE_STRING);
/* echo '<br />'. */ $social = $socialtmp ? $socialtmp : 'integra';

/**
 *  ind_estabelecimento
 *      primary key da tabela integra_base_reclamacao_estabelecimento
 */
/* echo '<br />'. */ $ind_estabelecimento = filter_input(INPUT_GET, 'estabelecimento', FILTER_SANITIZE_NUMBER_INT); 

/**
 *  ind_tipo
 *      primary key da tabela: integra_base_reclamacao_tipo
 */
/* echo '<br />'. */ $ind_tipo = filter_input(INPUT_GET, 'tipo', FILTER_SANITIZE_NUMBER_INT); 

/**
 *  banco
 *      nome do estabelecimento financeiro 
 *  tipo
 * 	String
 */
/* echo '<br />'. */ $banco = filter_input(INPUT_GET, 'banco', FILTER_SANITIZE_STRING); 

/**
 *  agencia
 *      identificado da agencia bancaria 
 *  tipo
 *      String
 */
/* echo '<br />'. */ $agencia = filter_input(INPUT_GET, 'agencia', FILTER_SANITIZE_STRING); 

/**
 *  data
 *      data da ocorrencia, data da emissao de uma documento ou comprovante 
 *  tipo
 *      String
 *  exemplo 
 *      01-01-2018 (dd-mm-aaaa)
 */
/* echo '<br />'. */ $data = filter_input(INPUT_GET, 'data', FILTER_SANITIZE_STRING); 

/**
 *  hora
 *      hora da ocorrencia 
 *  tipo
 *      String
 *  exemplo
 *      23-15-45 (h-m-s)
 */
/* echo '<br />'. */ $hora = filter_input(INPUT_GET, 'hora', FILTER_SANITIZE_STRING); 

/**
 *  espera
 *      tempo de espera em minutos 
 *  tipo
 *      inteiro
 *  exemplo
 *      198 (3 hora e 18 minutos)
 */
/* echo '<br />'. */ $espera = filter_input(INPUT_GET, 'espera', FILTER_SANITIZE_NUMBER_INT); 

/**
 *  atendido
 *      define se o usuário aguardou o atendimento ou desistiu 
 *  tipo
 *      boolean/inteiro
 *  exemplo
 *      1/Sim 
 *      0/Nao (padrao)	
 */
/* echo '<br />'. */ $atendido = filter_input(INPUT_GET, 'atendido', FILTER_SANITIZE_NUMBER_INT); 

/**
 *  queixa
 *      descricao em texto simple da situacao pelo quixoso 
 *  tipo
 *      string
 */
/* echo '<br />'. */ $queixa = filter_input(INPUT_GET, 'queixa', FILTER_SANITIZE_STRING); 

/**
 *  anexos
 *      texto em formmato de url separado por virgula (,) 
 *  tipo
 *      string
 */
/* echo '<br />'. */ $anexos = filter_input(INPUT_GET, 'anexos', FILTER_SANITIZE_STRING); 

/**
 *  code
 *      define o codigo do status da reclamação 
 *  tipo
 *      inteiro
 */
/* echo '<br />'. */ $code = filter_input(INPUT_GET, 'code', FILTER_SANITIZE_NUMBER_INT); 

/**
 *  reclamacao
 *      primary key da tabela de reclamações 
 *  tipo
 *      inteiro
 */
/* echo '<br />'. */ $reclamacao = filter_input(INPUT_GET, 'reclamacao', FILTER_SANITIZE_NUMBER_INT);

/**
 *  Tipo
 *      define o tipo da requisicao 
 *  tipo
 *      string
 */
/* echo '<br />'. */ $tipo = filter_input(INPUT_GET, 'tipo', FILTER_SANITIZE_STRING); 

/**
 *  Procon
 *      id Procon define a qual procon esta endereçada a requisicao 
 *  tipo
 *      inteiro
 */
/* echo '<br />'. */ $procon = filter_input(INPUT_GET, 'procon', FILTER_SANITIZE_NUMBER_INT); 

/**
 *  CEP
 *      codigo de enderecamento postal
 *  tipo
 *      87050390 (sem hifen)
 */
/* echo '<br />'. */ $cep = validaCEP(filter_input(INPUT_GET, 'cep', FILTER_SANITIZE_NUMBER_INT)); 

/**
 *  logradouro
 *      designa o referencial de enderecamento rua av praca entre outros
 *  tipo
 *      Rua Adelino Leal Nunes
 */
/* echo '<br />'. */ $logradouro = filter_input(INPUT_GET, 'logradouro', FILTER_SANITIZE_STRING); 

/**
 *  numero
 *      posicionamento da residencia no logradouro
 *  tipo
 *      string 
 *  exemplo
 *      80
 *      s\n
 *      1025A
 */
/* echo '<br />'. */ $numero = filter_input(INPUT_GET, 'numero', FILTER_SANITIZE_STRING); 

/**
 *  complemento
 *      proximidade ou detalhamento que permite localizar o endereco
 *  tipo
 *      string 
 *  exemplo
 *      Proximo ao numero 200
 *      frente a escola
 *      
 */
/* echo '<br />'. */ $complemento = filter_input(INPUT_GET, 'complemento', FILTER_SANITIZE_STRING); 

/**
 *  bairro
 *      agrupamento de logradouros
 *  tipo
 *      string 
 *  exemplo
 *      Jd. Aclimação
 *      
 */
/* echo '<br />'. */ $bairro = filter_input(INPUT_GET, 'bairro', FILTER_SANITIZE_STRING); 

/**
 *  cidade
 *      cidade
 *  tipo
 *      string 
 *  exemplo
 *      Maringá
 *      
 */
/*echo '<br />'. */ $cidade = filter_input(INPUT_GET, 'cidade', FILTER_SANITIZE_STRING); 

/**
 *  uf
 *      unidade federativa- sigla 2 caracteres
 *  tipo
 *      string 
 *  exemplo
 *      PR
 *      
 */
/* echo '<br />'. */ $uf = filter_input(INPUT_GET, 'uf', FILTER_SANITIZE_STRING); 

/**
 *  documento
 *      descreve o tipo do documento
 *  tipo
 *      string 
 *  exemplo
 *      CNH RG CPF
 *      
 */
/* echo '<br />'. */ $documento = filter_input(INPUT_GET, 'documento', FILTER_SANITIZE_STRING); 

/**
 *  lado
 *      descreve a qual lado esta sendo exposto
 *  tipo
 *      string 
 *  exemplo
 *      frente ou verso
 *      
 */
/* echo '<br />'. */ $lado = filter_input(INPUT_GET, 'lado', FILTER_SANITIZE_STRING); 

/**
 *  id
 *      indice da tabela - primary key generica
 *  tipo
 *      inteiro
 */
/* echo '<br />'. */ $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

