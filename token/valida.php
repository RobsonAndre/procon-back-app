<?php
	$tk  = new Token;
	$cod = $tk->validaToken(KEY,$token,$ldias,$time); 
	$output = $msg[$cod];
		
?>