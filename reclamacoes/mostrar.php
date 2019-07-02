<?php
	//Conectando com o banco
	$Conn = new Conn;
	$Qry  = new Qry; 
	$c = $Conn->connect(HOST,USER,PASS,DB);
	
	//Reclamacao
	$s = "	SELECT 
				".PFIX."reclamacao.indice AS uid,
				".PFIX."reclamacao.status,
				".PFIX."reclamacao.ind_estabelecimento,
				".PFIX."reclamacao.ind_tipo,
				".PFIX."reclamacao.tabela_reclamacao,
				".PFIX."reclamacao.time,
				from_unixtime(".PFIX."reclamacao.time) AS data_registro 
			FROM 
				".PFIX."reclamacao
			WHERE 
				".PFIX."reclamacao.indice = '$reclamacao'
		 ";
	$r = $Qry->query($s);
	$l = $Qry->rows($r);
	if($l){
		$d = $Qry->arr($r);
		
		/**/
		$msg[218]['results']['uid']  = $d[0]['uid'];
		$status                      = $d[0]['status'];
                //Pegando a descricao do status
                //pegando o status
                $ss  = "SELECT status, descricao FROM ".PFIX."base_reclamacao_status WHERE indice = '$status'";
		$rr  = $Qry->query($ss);
		$dd = $Qry->arr($rr);
		$msg[218]['results']['status'] = $dd[0]['status'];
                $msg[218]['results']['status_code']   = $d[0]['status'];
                $msg[218]['results']['status_descricao'] = $dd[0]['descricao'];                
                if($status==51){
                    /**/
                    //recusada pegar a mensagem do atendente
                    $sss  = "SELECT mensagem FROM ".PFIX."reclamacao_recusa WHERE ind_reclamacao = '$reclamacao' ORDER BY indice DESC LIMIT 0, 1";
                    $rrr  = $Qry->query($sss);
                    $ddd = $Qry->arr($rrr);
                    $msg[218]['results']['status_descricao'] = $dd[0]['descricao'] .', '. utf8_encode($ddd[0]['mensagem']);                
                    /**/
                    
                }
                
		$msg[218]['results']['data_registro'] = $d[0]['data_registro'];
		$ind_estabelecimento = $d[0]['ind_estabelecimento'];
		//verificando o estabelecimento
		$s  = "SELECT estabelecimento FROM ".PFIX."base_reclamacao_estabelecimento WHERE indice = '$ind_estabelecimento'";
		$r  = $Qry->query($s);
		$dd = $Qry->arr($r);
		$msg[218]['results']['estabelecimento'] = $dd[0]['estabelecimento'];
		//verificando a reclamacao
		/**/
		$ind_tipo = $d[0]['ind_tipo'];
		$s  = "SELECT tipo FROM ".PFIX."base_reclamacao_tipo WHERE indice = '$ind_tipo'";
		$r  = $Qry->query($s);
		$dd = $Qry->arr($r);
		$msg[218]['results']['reclamacao'] = $dd[0]['tipo'];
		//$msg[218]['results']['s'] = $s;
		//Detalhes da reclamacao
		$tabela = $d[0]['tabela_reclamacao'];
		$indice = $d[0]['uid'];
		
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
		$msg[218]['results']['banco']           = $dd[0]['banco'];
		$msg[218]['results']['agencia']         = $dd[0]['agencia'];
		$msg[218]['results']['data_ocorrencia'] = $dd[0]['data_ocorrencia'];
		$msg[218]['results']['tempo_espera']    = $dd[0]['espera'];
		$msg[218]['results']['atendido']        = $dd[0]['atendido'];
		
		$s = "	SELECT 
				queixa 
			FROM 
				".PFIX."reclamacao_queixa
			WHERE 
				ind_reclamacao = '$indice'
		 ";
		$r  = $Qry->query($s);
		$dd = $Qry->arr($r);
		$msg[218]['results']['queixa'] = $dd[0]['queixa'];
		
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
			$msg[218]['results']['anexos'][$j] = IMGPATH.$dd[$j]['anexo'];
		}
	
		$output = $msg[218];
	}else{
		$output = $msg[219];
	}
	//Desconectando o banco
	$Conn->desconnect($c);
?>