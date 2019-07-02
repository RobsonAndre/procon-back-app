<?php
	function montaTimeStamp($data,$hora){
		$d = explode('-',$data);
		$h = explode(':',$hora);
                /** /
                echo '<br >dia: '.$d[0];
		echo '<br >mes: '.$d[1];
		echo '<br >ano: '.$d[2];
		echo '<br >hr : '.$h[0];
		echo '<br >min: '.$h[1];
		echo '<br >seg: '.$h[2];
                die();
                /**/
		return mktime($h[0],$h[1],$h[2],$d[1],$d[0],$d[2]);
	}
