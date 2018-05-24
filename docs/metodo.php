﻿<!DOCTYPE html>
<html>
<head>
<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="../assets/materialize/css/materialize.min.css" media="screen,projection"/>

<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
	<div class="container">
        <div class="row">
        	<div class="col right">
            	<a href="../docs/">Docs</a>
            </div>
        </div>
    	<?php 
			$metodo = $_GET['m'].".php";
			@include($metodo);
		?>
	</div>
    <!--JavaScript at end of body for optimized loading--> 
	<script type="text/javascript" src="../assets/materialize/js/materialize.min.js"></script>
</body>
</html>