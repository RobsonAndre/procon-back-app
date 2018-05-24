<?php
	//Conectando com o banco
	$Conn = new Conn;
	$Qry  = new Qry; 
	$c = $Conn->connect(HOST,USER,PASS,DB);
	//SQL
	$s = "	SELECT 
				".PFIX."base_reclamacao_tipo.indice AS uid, 
				".PFIX."base_reclamacao_tipo.tipo AS reclamacao 
			FROM 
				".PFIX."rel_reclamacao_estabelecimento_tipo, 
				".PFIX."base_reclamacao_tipo 
			WHERE 
				".PFIX."rel_reclamacao_estabelecimento_tipo.status > 0 
				AND
				".PFIX."rel_reclamacao_estabelecimento_tipo.ind_estabelecimento = $ind_estabelecimento
				AND
				".PFIX."rel_reclamacao_estabelecimento_tipo.ind_tipo = ".PFIX."base_reclamacao_tipo.indice
			ORDER BY 
				".PFIX."base_reclamacao_tipo.tipo
		 ";
	
	$r = $Qry->query($s);
	$l = $Qry->rows($r);
	
	$msg[210]['results']['qtde'] = $l;
	//$msg[210]['results']['sql']  = $s;
	/**/
	if($l){
		$arr = $Qry->arr($r);
		$msg[210]['results']['list'] = $arr;
	}
	
	$output = $msg[210];
	
	//Desconectando o banco
	$Conn->desconnect($c);
?>