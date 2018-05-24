<?php
		
	if($procon){ //para qual unidade do procon a mensagem deve ser enviada
		if($mensagem){	//Verifica se a mensagem esta valida
			$Conn = new Conn;
			$Qry  = new Qry; 
			$c = $Conn->connect(HOST,USER,PASS,DB);
				
			//registrando a mensagem
			$s = "	INSERT INTO ".PFIX."mensagem 
							( uid, ind_procon, mensagem, time) 
						VALUES 
							('$uid', '$ind_procon', '$mensagem', '$ind_tipo', '$time')
					 ";
			if($r = $Qry->query($s)){
				//Montar o Protocolo	
			}else{
				//Avisar o erro
			}
			//Desconectando o banco
			$Conn->desconnect($c);
			
		}else{
			$msg[213]['info'] = 'Mensagem não definida';
			$temp = $msg[213];
		}
	}else{
		$msg[213]['info'] = 'Agencia do Procon não definida';
		$temp = $msg[213];
	}

	$output = $temp;
?>