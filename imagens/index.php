<?php
	header('Access-Control-Allow-Origin: *');
	$target_path = "upload/"; 
	$target_path = $target_path . basename( $_FILES['file']['name']);	
	if (move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
		$response['code'] = '200';
		$response['message'] = 'the file was uploaded successfuly';
		echo json_encode($response);
	} else {
		$response['code'] = '201';
		$response['error'] = 'there are missing arguments' ;
		echo json_encode($response);
	}
?>