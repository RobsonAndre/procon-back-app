<?php
	//Conectando com o banco
	$Conn = new Conn;
	$Qry  = new Qry; 
	$c = $Conn->connect(HOST,USER,PASS,DB);
	
	//Abertas
	$s = "	SELECT 
				".PFIX."reclamacao.indice
			FROM 
				".PFIX."reclamacao
			WHERE 
				".PFIX."reclamacao.status = 1
				AND
				".PFIX."reclamacao.uid = '$uid'
		 ";
	
	$r = $Qry->query($s);
	$l = $Qry->rows($r);
	
	$msg[214]['results']['abertas']['code'] = '1';
	$msg[214]['results']['abertas']['qtde'] = $l;
	
	//Em processamento
	$s = "	SELECT 
				".PFIX."reclamacao.indice
			FROM 
				".PFIX."reclamacao
			WHERE 
				".PFIX."reclamacao.status = 11
				AND
				".PFIX."reclamacao.uid = '$uid'
		 ";
	
	$r = $Qry->query($s);
	$l = $Qry->rows($r);
	$msg[214]['results']['processamento']['code'] = '11';
	$msg[214]['results']['processamento']['qtde'] = $l;
	
	//Finalizadas
	$s = "	SELECT 
				".PFIX."reclamacao.indice
			FROM 
				".PFIX."reclamacao
			WHERE 
				".PFIX."reclamacao.status = 51
				AND
				".PFIX."reclamacao.uid = '$uid'
		 ";
	
	$r = $Qry->query($s);
	$l = $Qry->rows($r);
	$msg[214]['results']['finalizadas']['code'] = '11';
	$msg[214]['results']['finalizadas']['qtde'] = $l;
	
	$output = $msg[214];
	
	//Desconectando o banco
	$Conn->desconnect($c);
?>