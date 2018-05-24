<?php
	function montaTimeStamp($data,$hora){
		$d = explode('-',$data);
		$h = explode('-',$hora);
		return mktime($h[0],$h[1],$h[2],$d[1],$d[0],$d[2]);
	}
?>