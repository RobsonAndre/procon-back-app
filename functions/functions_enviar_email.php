<?php
	function enviarEmail($email,$url){
		if(mail($email,'redefinir senha','click aqui: '.$url)){
			return true;
		}else{
			return false;
		}
	}
?>