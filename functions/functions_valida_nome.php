<?php
	function validaNome($nome){
		$nome = trim($nome);
		$tam = strlen($nome);
		$tam = strlen($nome);
		$espaco = strpos($nome,' '); 
		if($tam < 5 ){
			$nome =  false;
		}elseif($espaco < 1 ){
			$nome =  false;
		}
		return $nome;
	}
?>