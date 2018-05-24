<?php
	//definindo a tabela -> tipo de relacamcao	
	if($ind_estabelecimento == 1){ //verifica o estabelecimento
		if($ind_tipo == 1){	//verifica o tipo da reclamacao
			$tabela = PFIX.'reclamacao_banco';
			if(!$banco){
				$msg[213]['info'] = 'Campo Banco não preenchido';
				$temp = $msg[213];
			}elseif(!$data){
				$msg[213]['info'] = 'Campo Data não preenchido';
				$temp = $msg[213];
			}elseif(!$hora){
				$msg[213]['info'] = 'Campo Hora não preenchido';
				$temp = $msg[213];
			}elseif(!$espera){
				$msg[213]['info'] = 'Campo Tempo de espera não preenchido';
				$temp = $msg[213];
			}elseif(!$atendido){
				$msg[213]['info'] = 'Campo Atendido não preenchido';
				$temp = $msg[213];
			}elseif(!$queixa){
				$msg[213]['info'] = 'Campo Queixa não preenchido';
				$temp = $msg[213];
			}elseif(!$anexos){
				$msg[213]['info'] = 'Campo Anexo é obrigatório';
				$temp = $msg[213];
			}else{
				
				//montar o timestamp
				$tdata = montaTimestamp($data,$hora);
				//Conectando com o banco
				$Conn = new Conn;
				$Qry  = new Qry; 
				$c = $Conn->connect(HOST,USER,PASS,DB);
				
				//registrando a reclamacao
				$s = "	INSERT INTO ".PFIX."reclamacao 
							( uid, ind_estabelecimento, tabela_reclamacao, ind_tipo, time) 
						VALUES 
							('$uid', '$ind_estabelecimento', '$tabela', '$ind_tipo', '$time')
					 ";
					 
				if($r = $Qry->query($s)){
					//pegando o indice da reclamacao
					$s = "SELECT indice FROM ".PFIX."reclamacao WHERE uid = '$uid' AND time = '$time' ";
					$r = $Qry->query($s);
					$d = $Qry->arr($r);
					$indice = $d[0]['indice'];
					/**/
					//inserindo os detalhes da reclamacao
					$s = "	INSERT INTO ".$tabela." 
							( ind_reclamacao, banco, agencia, data, espera, atendido, time) 
							VALUES 
							('$indice', '$banco', '$agencia', '$tdata', '$espera', '$atendido', '$time')
					 	";
					$r = $Qry->query($s);
					/**/
					
					/**/
					//inserindo a queixa
					if($queixa){
					$s = "	INSERT INTO ".PFIX."reclamacao_queixa
							(ind_reclamacao, queixa, time) 
							VALUES 
							('$indice', '$queixa','$time')
					 	";
					$r = $Qry->query($s);
					}
					/**/
					
					/**/
					//Inserindo os anexos
					if($anexos){
						$anx = explode(',',$anexos);
						for($i=0;$i<count($anx);$i++){
							if($anx[$i]!=""){
								$a = $anx[$i];
								$s = "INSERT INTO ".PFIX."reclamacao_anexos (ind_reclamacao, anexo, time ) VALUES ('$indice', '$a', '$time')";
								$r = $Qry->query($s);
							}
						}
					}
					/**/
					
					//inserindo os dados no results
					$msg[212]['results']['uid']    = $indice;
					$msg[212]['results']['status_code'] = "1";
					$msg[212]['results']['status_message'] = "Reclamacão submetida com sucesso";
					$temp = $msg[212];
				
				}else{
				
					$msg[213]['info'] = 'Erro ao tentar inserir a reclamação na base de dados';
					$temp = $msg[213];
				
				}
				//Desconectando o banco
				$Conn->desconnect($c);
			}
		}else{
			$msg[213]['info'] = 'Reclamação não definida';
			$temp = $msg[213];
		}
	}else{
		$msg[213]['info'] = 'Estabelecimento não definido';
		$temp = $msg[213];
	}

	$output = $temp;
?>