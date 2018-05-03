<!DOCTYPE html>
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
        	<div class="col">
            	<h5 class="purple-text text-darken-4"><u>Login</u></h5>
                <div class="row">
        			<div class="col" style="font-size:24px">
        				<span class="orange-text" style="padding-right:10px;">GET</span> <span class="teal-text">/login/?action={<span class="red-text">action</span>}&amp;email={<span class="red-text">email</span>}&amp;senha={<span class="red-text">senha</span>}</span>
                	</div>
                </div>
                <div class="row">
        			<div class="col" style="font-size:14px">
        				<span style="font-size:18px">Parametros:</span><br />
                        <div style="padding-left:25px;">
                        action [inteiro]: 1<br />
                        email [email]: user@user.com<br />
                        senha [string]: teste#senha@1
                        </div>
                    </div>
                </div>
                <div class="row">
        			<div class="col" style="font-size:14px">
        				<span style="font-size:18px">Uso:</span><br />
                        <div style="padding-left:25px;">
                        <a href="http://papiroweb.com.br/integra/login/?action=1&email=user@user.com&senha=senha@12&" target="_blank">http://papiroweb.com.br/integra/login/?action=1&amp;email=user@user.com&amp;senha=senha@12&amp;</a>
                        </div>
                    </div>
                </div>
                <div class="row">
        			<div class="col" style="font-size:14px">
        				<span style="font-size:18px">Mensagens:</span><br />
                        <div style="padding-left:25px;">
                        	<a href="./msg.php?m=110&" target="_blank">110 - Sucesso</a><br />
                        	<a href="./msg.php?m=111&" target="_blank">111 - Erro</a><br />
                        </div>
                    </div>
                </div>
            </div>
        </div>	
	</div>
	<!--JavaScript at end of body for optimized loading--> 
	<script type="text/javascript" src="../assets/materialize/js/materialize.min.js"></script>
</body>
</html>