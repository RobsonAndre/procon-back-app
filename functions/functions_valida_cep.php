<?php
	function validaCEP($cep){
		$tam = strlen($cep);
		if($tam==8){
                    return $cep;
                }else{
                    return false;
                }
	}
?>