<?php
    /**
     * @author Robson Andre
     */
	include("../config/config.php");
	
	if($action==1){
		include("./login.php");
	}elseif($action==2){
		include("./logout.php");
	}else{
		$output = $msg[101];
	}
	echo json_encode($output);
?>