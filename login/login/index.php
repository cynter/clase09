<!DOCTYPE html>
<html >
	<head>
		<meta charset="UTF-8">
    	<title>Login Form</title>  
    	<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	    <script src="js/prefixfree.min.js"></script>
	    <script src="js/index.js"></script>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	</head>
	<body>
    	<div class="login">
			<h1>Login</h1>
    			<form method="post">
    				<input type="text" id="miusuario" placeholder="Username" required="required" value="<?php 
    	

				    	if(isset( $_COOKIE['usuario']))
				    	echo $_COOKIE['usuario'] ;



				    	?>" />

      				<input type="password" name="p" placeholder="Password" required="required" />
   				</form>
   			<button type="button" class="btn btn-primary btn-block btn-large" onclick="ingresar()" name="ingresar">Let me in.</button>
		</div>
  	</body>
</html>

