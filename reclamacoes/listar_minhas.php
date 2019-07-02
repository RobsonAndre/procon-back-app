<?php
	//Conectando com o banco
	$Conn = new Conn;
	$Qry  = new Qry; 
	$c = $Conn->connect(HOST,USER,PASS,DB);
	
	if($code==99){
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
				".PFIX."reclamacao.uid = '$uid'
		 ";
	    
        }else{
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
				".PFIX."reclamacao.status = '$code'
				AND
				".PFIX."reclamacao.uid = '$uid'
		 ";
	}
	
	$r = $Qry->query($s);
	$l = $Qry->rows($r);
	
	//$msg[216]['results']['sql'] = $s;
	$msg[216]['results']['code'] = $code;
	$msg[216]['results']['qtde'] = $l;
	
	$d = $Qry->arr($r);
	
	/**/
	for($i = 0; $i<count($d);$i++){
                $ind_reclamacao = $d[$i]['uid'];
		$msg[216]['results']['list'][$i]['uid'] = $d[$i]['uid'];
		$status = $d[$i]['status'];
                //pegando o status
                $ss  = "SELECT status, descricao FROM ".PFIX."base_reclamacao_status WHERE indice = '$status'";
		$rr  = $Qry->query($ss);
		$dd = $Qry->arr($rr);
		$msg[216]['results']['list'][$i]['status'] = $dd[0]['status'];
                $msg[216]['results']['list'][$i]['status_descricao'] = utf8_encode($dd[0]['descricao']);                
                if($status==51){
                    /**/
                    //recusada pegar a mensagem do atendente
                    $sss  = "SELECT mensagem FROM ".PFIX."reclamacao_recusa WHERE ind_reclamacao = '$ind_reclamacao' ORDER BY indice DESC LIMIT 0, 1";
                    $rrr  = $Qry->query($sss);
                    $ddd = $Qry->arr($rrr);
                    $msg[216]['results']['list'][$i]['status_descricao'] = utf8_encode($dd[0]['descricao']) .', '. utf8_encode($ddd[0]['mensagem']);                
                    /**/
                    
                }
                
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
		//$msg[216]['results']['list'][$i]['atendido']        = $dd[0]['atendido'];
		
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
			$msg[216]['results']['list'][$i]['anexos'][$j] = IMGPATH.$dd[$j]['anexo'];
		}
		/**/
	}
	/** /
        echo '<pre>';
        print_r($msg);
        /**/
	$output = $msg[216];
	
	//Desconectando o banco
	$Conn->desconnect($c);