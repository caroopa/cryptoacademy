<?php 
	include("bd.php"); 
	include("config2.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style_register.css" rel="stylesheet" type="text/css">

    <title>Login</title>
</head>
<body>
	<div class="container">
		<h1>Login</h1>
		<h2>Bienvenido</h2>

		<form action="" method="post">
			<input type="email" name="mail" placeholder="Mail">
			<input type="password" name="contra" placeholder="Contraseña">
			<button type="submit">Iniciar sesión</button>
		</form>
	</div>
</body>
</html>