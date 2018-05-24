<?php
	function pegarUID($token){
		$pts = explode('-',$token);
		return base64_decode($pts[1]);
	}
?>