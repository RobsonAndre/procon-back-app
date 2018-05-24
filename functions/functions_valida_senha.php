<?php
	function validaSenha($senha){
		$tam = strlen($senha);
		if($tam < 8 || $tam > 15 ){
			$senha =  false;
		}else{
			$senha = crypt($senha, '$'.METH.'$'.COAST.'$'.SALT.'$');
		}
		return $senha;
	}
?>