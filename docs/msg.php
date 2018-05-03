<?php
	include('../config/mensagens.php');
	$m = $_GET['m'];
	echo json_encode($msg[$m]);
?>