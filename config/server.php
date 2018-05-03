<?php
	@require("./define.php");
	@require("./connect.php");
	@require("./query.php");
	
	$Conn = new Conn;
	$Qry  = new Qry; 
	$c = $Conn->connect(HOST,USER,PASS,DB);
	$s = "SELECT * FROM ".DB.".".PFIX."etiqueta WHERE indice >= 1 ";
	$r = $Qry->query($s);
	$Conn->desconnect($c);
	$l   = $Qry->rows($r);
	$out = $Qry->arr($r);
	echo json_encode($out);
	
?>