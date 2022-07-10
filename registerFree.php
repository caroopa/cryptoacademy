<?php
	if(isset($_POST["registrar"])) {

		$nombre = $_POST["nombre"];
		$mail = $_POST["mail"];

		$sqlNombre = $conexion -> prepare("SELECT * from usuarios WHERE nombre='$nombre';");
		$sqlNombre -> execute();	
		$existeNombre = $sqlNombre -> fetch(PDO::FETCH_LAZY);

		$sqlMail = $conexion -> prepare("SELECT * from usuarios WHERE mail='$mail';");
		$sqlMail -> execute();	
		$existeMail = $sqlMail -> fetch(PDO::FETCH_LAZY);

		if (!$existeNombre and !$existeMail) {
			$sentenciaSQL = $conexion -> prepare("INSERT INTO usuarios (nombre, mail, contra, rol) 
			VALUES (:nombre, :mail, :contra, :rol);");
			$sentenciaSQL -> bindParam(":nombre", $nombre);
			$sentenciaSQL -> bindParam(":mail", $mail);
			$sentenciaSQL -> bindParam(":contra", $_POST["contra"]);
			$sentenciaSQL -> bindParam(":rol", "free");
			$sentenciaSQL -> execute();
			header("Location:suscripto.php");
		}
		else {
			if($existeNombre) {
				echo "<script>alert('El usuario ya existe.');</script>";
			}
			else {
				echo "<script>alert('El mail ya existe.');</script>";
			}
		}
	}
?>

<html>
  <head>
    <meta charset="UTF-8" />
    <title>Crypto Academy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/style_register.css" />
  </head>
		<div class="container">
			<h1>Register</h1>
			<h2>Bienvenido a la suscripción FREE</h2>
	
			<form action="" method="post">
				<input type="text" placeholder="Nombre" name="nombre">
				<input type="email" placeholder="Mail" name="mail">
				<input type="password" placeholder="Contraseña" name="contra">
				<input type="password" placeholder="Confirmar contraseña">
				<button type="submit" name="registrar">Registrarse</button>
			</form>
		</div>

	<script>

	</script>
	</body>
</html>