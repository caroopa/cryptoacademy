<?php
	session_start();

	include("config2.php");
	// session_start();

	if(!isset($_SESSION["rool"])) {
		echo "<script>window.location.href='login.php';</script>";
		die();
	}
	else {
		if($_SESSION["rool"] != 'free') {
			echo "<script>window.location.href='login.php';</script>";
			die();
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style_login.css" rel="stylesheet" type="text/css">

    <title>Login</title>
</head>
<body>
	<div class="container">
		<h2>Bienvenido FREE</h2>
		<form action="login.php" method="get">
			<button type="submit" name="cerrar_sesion">Cerrar Sesión</button>
		</form>
	</div>
</body>
</html>