<?php
	include("../config/headers.php");
	include("../config/defines.php");
	include("../config/connect.php");
	include("../config/query.php");
	include("../config/token.php");
	include("../config/mensagens.php");
	include("../config/vars.php");
	
	if($action==1){
		$output = $msg[101];
	}elseif($action==2){
		include("./valida.php");
	}else{
		$output = $msg[101];
	}
	echo json_encode($output);
?>