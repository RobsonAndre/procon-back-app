<?php
	//Conectando com o banco
	$Conn = new Conn;
	$Qry  = new Qry; 
	$c = $Conn->connect(HOST,USER,PASS,DB);
	
	//Abertas
	$s = "	SELECT 
				".PFIX."reclamacao.indice AS uid,
				".PFIX."reclamacao.ind_estabelecimento,
				".PFIX."reclamacao.ind_tipo,
				".PFIX."reclamacao.tabela_reclamacao,
				".PFIX."reclamacao.time,
				from_unixtime(".PFIX."reclamacao.time) AS data_registro 
			FROM 
				".PFIX."reclamacao
			WHERE 
				".PFIX."reclamacao.status = '$code'
				AND
				".PFIX."reclamacao.uid = '$uid'
		 ";
	
	$r = $Qry->query($s);
	$l = $Qry->rows($r);
	
	$msg[216]['results']['code'] = $code;
	$msg[216]['results']['qtde'] = $l;
	
	$d = $Qry->arr($r);
	
	/**/
	for($i = 0; $i<count($d);$i++){
		$msg[216]['results']['list'][$i]['uid'] = $d[$i]['uid'];
		$msg[216]['results']['list'][$i]['data_registro'] = $d[$i]['data_registro'];
		$ind_estabelecimento = $d[$i]['ind_estabelecimento'];
		//verificando o estabelecimento
		$s  = "SELECT estabelecimento FROM ".PFIX."base_reclamacao_estabelecimento WHERE indice = '$ind_estabelecimento'";
		$r  = $Qry->query($s);
		$dd = $Qry->arr($r);
		$msg[216]['results']['list'][$i]['estabelecimento'] = $dd[0]['estabelecimento'];
		//verificando a reclamacao
		/**/
		$ind_tipo = $d[$i]['ind_tipo'];
		$s  = "SELECT tipo FROM ".PFIX."base_reclamacao_tipo WHERE indice = '$ind_tipo'";
		$r  = $Qry->query($s);
		$dd = $Qry->arr($r);
		$msg[216]['results']['list'][$i]['reclamacao'] = $dd[0]['tipo'];
		//$msg[216]['results']['list'][$i]['s'] = $s;
		//Detalhes da reclamacao
		$tabela = $d[$i]['tabela_reclamacao'];
		$indice = $d[$i]['uid'];
		
		$s = "	SELECT 
					banco, 
					agencia, 
					from_unixtime(data) AS data_ocorrencia, 
					espera, 
					atendido 
				FROM 
					".$tabela." 
				WHERE 
					ind_reclamacao = '$indice'
			 ";
		$r  = $Qry->query($s);
		$dd = $Qry->arr($r);
		$msg[216]['results']['list'][$i]['banco']           = $dd[0]['banco'];
		$msg[216]['results']['list'][$i]['agencia']         = $dd[0]['agencia'];
		$msg[216]['results']['list'][$i]['data_ocorrencia'] = $dd[0]['data_ocorrencia'];
		$msg[216]['results']['list'][$i]['tempo_espera']    = $dd[0]['espera'];
		$msg[216]['results']['list'][$i]['atendido']        = $dd[0]['atendido'];
		
		$s = "	SELECT 
					queixa 
				FROM 
					".PFIX."reclamacao_queixa
				WHERE 
					ind_reclamacao = '$indice'
			 ";
		$r  = $Qry->query($s);
		$dd = $Qry->arr($r);
		$msg[216]['results']['list'][$i]['queixa'] = $dd[0]['queixa'];
		
		$s = "	SELECT 
					anexo 
				FROM 
					".PFIX."reclamacao_anexos
				WHERE 
					ind_reclamacao = '$indice'
			 ";
		$r  = $Qry->query($s);
		$dd = $Qry->arr($r);
		for($j=0;$j<count($dd);$j++){
			$msg[216]['results']['list'][$i]['anexos'][$j] = $dd[$j]['anexo'];
		}
		/**/
	}
	/**/
	$output = $msg[216];
	
	//Desconectando o banco
	$Conn->desconnect($c);
?>