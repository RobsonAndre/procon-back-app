<?php
	//Conectando com o banco
	$Conn = new Conn;
	$Qry  = new Qry; 
	$c = $Conn->connect(HOST,USER,PASS,DB);
	
	
        // Cancelada
        //
        // Foi iniciada no app mas o ususario desitiu e cancelou
        
	$s ="	SELECT 
                    ".PFIX."reclamacao.indice
		FROM 
                    ".PFIX."reclamacao
		WHERE 
                    ".PFIX."reclamacao.status = 0
                    AND
                    ".PFIX."reclamacao.uid = '$uid'
	    ";
	$r = $Qry->query($s);
	$l = $Qry->rows($r);
	$msg[214]['results']['cancelada']['code'] = 0;
	$msg[214]['results']['cancelada']['qtde'] = $l;
	
        // Espera
        //
        // Foi iniciada no app mas não foi recepcionada pelo Procon
        $s ="	SELECT 
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
	
	$msg[214]['results']['espera']['code'] = 1;
	$msg[214]['results']['espera']['qtde'] = $l;
	
	// Aberta
        //
        // Foi recebida pelo procon mas esta aguardando ser preocessada
	$s ="	SELECT 
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
	$msg[214]['results']['aberta']['code'] = 11;
	$msg[214]['results']['aberta']['qtde'] = $l;
	
	// Pendentes
        //
        // Foi recebida pelo procon mas devolvida para à origem/usuário para correção ou mais informação
	$s ="	SELECT 
                    ".PFIX."reclamacao.indice
		FROM 
                    ".PFIX."reclamacao
		WHERE 
                    ".PFIX."reclamacao.status = 21
                    AND
                    ".PFIX."reclamacao.uid = '$uid'
	    ";
	$r = $Qry->query($s);
	$l = $Qry->rows($r);
	$msg[214]['results']['pendente']['code'] = 21;
	$msg[214]['results']['pendente']['qtde'] = $l;
	
        // Foi recebida pelo procon e esta em processamento
	$s ="	SELECT 
                    ".PFIX."reclamacao.indice
		FROM 
                    ".PFIX."reclamacao
		WHERE 
                    ".PFIX."reclamacao.status = 31
                    AND
                    ".PFIX."reclamacao.uid = '$uid'
	    ";
	$r = $Qry->query($s);
	$l = $Qry->rows($r);
	$msg[214]['results']['processamento']['code'] = 31;
	$msg[214]['results']['processamento']['qtde'] = $l;
	
	// Recusada
        //
        // Foi recebida pelo procon mas contem erros que impedem a abertura de processo
	$s ="	SELECT 
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
	$msg[214]['results']['recusada']['code'] = 51;
	$msg[214]['results']['recusada']['qtde'] = $l;
	
        // Finalizada
        //
        // Fluxo completo no procon
	$s ="	SELECT 
                    ".PFIX."reclamacao.indice
		FROM 
                    ".PFIX."reclamacao
		WHERE 
                    ".PFIX."reclamacao.status = 91
                    AND
                    ".PFIX."reclamacao.uid = '$uid'
	    ";
	$r = $Qry->query($s);
	$l = $Qry->rows($r);
	$msg[214]['results']['finalizada']['code'] = 91;
	$msg[214]['results']['finalizada']['qtde'] = $l;
	
	$msg[214]['results']['registro']['code'] = 100;
	$msg[214]['results']['registro']['qtde'] = $msg[214]['results']['cancelada']['qtde'] +$msg[214]['results']['espera']['qtde'] +$msg[214]['results']['aberta']['qtde']+$msg[214]['results']['pendente']['qtde']+$msg[214]['results']['processamento']['qtde']+$msg[214]['results']['recusada']['qtde']+$msg[214]['results']['finalizada']['qtde'];
	
        $output = $msg[214];
	
	//Desconectando o banco
	$Conn->desconnect($c);
?>