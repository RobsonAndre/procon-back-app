<?php
	class Token{
		
		//gera token
		public function geraToken($key, $uid, $social, $time){
			return($key && $social && $uid && $time) ? sha1($key.".".$social.".".$uid.".".$time): false;
		}
		
		//valida token
		public function validaToken($uid, $token){
			$Conn = new Conn;
			$Qry  = new Qry; 
			$c = $Conn->connect(HOST,USER,PASS,DB);
			//SQL - Pegando o ultimo token registrado no log
			$s = "SELECT token, time FROM papiroweb.".PFIX."user_log WHERE uid='$uid' ORDER BY indice DESC LIMIT 0, 1 ";
			$r = $Qry->query($s);
			$l = $Qry->rows($r);
			if($l){
				//Pegando o UID
				$d = $Qry->arr($r);
				if($token === $d[0]['token']){
					//verificar quando foi o ultimo login
					$ttoken = $d[0]['time']+$ldia;
					if($ttoken > $time){
						return true;
					}else{
						$msg[100]['status_message'] = "Erro: Token expirou em: ". date ('d/m/Y H:i:s',$ttoken).".";
						return false;
					}
				}else{
					return false;
				}
			}else{
				return false;
			}
		}
	}
?>