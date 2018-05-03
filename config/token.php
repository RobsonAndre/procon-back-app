<?php
	class Token{
		
		//gera token
		public function geraToken($key, $uid, $social, $time){
			return($key && $social && $uid && $time) ? sha1($key.".".$social.".".$uid.".".$time).'-'.base64_encode($time): false;
		}
		
		//valida token
		public function validaToken($key, $uid, $social, $token, $ldias, $time){
			$pts = explode('-',$token);
			$tkn = $pts[0];
			$tme = $pts[1];
			if($tkn === sha1($key.".".$social.".".$uid.".".$tme)){
				$ttoken = $tkn + $ldias;
				if($ttoken > $time){
					return true;
				}else{
					$msg[100]['status_message'] = "Erro: Token expirou em: ". date ('d/m/Y H:i:s',$ttoken).".";
					return false;
				}
			}else{
				return false;
			}
		}
	}
?>