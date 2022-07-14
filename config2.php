<?php
	session_start();

	if(isset($_GET["cerrar_sesion"])) {
		session_unset();
		session_destroy();
	}

	// if(isset($_SESSION["rool"])) {
	// 	switch($_SESSION["rool"]) {
	// 		case "free":
	// 			echo "<script>window.location.href='headerFree.php';</script>";
	// 			die();
	// 			break;
	// 		case "plata":
	// 			echo "<script>window.location.href='headerPlata.php';</script>";
	// 			die();
	// 			break;
	// 		case "oro":
	// 			echo "<script>window.location.href='headerOro.php';</script>";
	// 			die();
	// 			break;
	// 	}			
	// }

	if(isset($_POST["mail"]) && isset($_POST["contra"])) {
		$mail = $_POST["mail"];
		$contra = $_POST["contra"];

		$sentenciaSQL = $conexion -> prepare("SELECT * FROM usuarios WHERE mail=:mail AND contra=:contra;");
		$sentenciaSQL -> bindParam(":mail", $mail);
		$sentenciaSQL -> bindParam(":contra", $contra);
		$sentenciaSQL -> execute();	
		$sesion = $sentenciaSQL -> fetch(PDO::FETCH_NUM);

		if($sesion) {
			$rol = $sesion[3];
			$_SESSION["rool"] = $rol;

			if(isset($_SESSION["rool"])) {
				switch($_SESSION["rool"]) {
					case "free":
						echo "<script>window.location.href='headerFree.php';</script>";
						die();
						break;
					case "plata":
						echo "<script>window.location.href='headerPlata.php';</script>";
						die();
						break;
					case "oro":
						echo "<script>window.location.href='headerOro.php';</script>";
						die();
						break;		
				}
			}		
		}
		else {
			echo "Error: el usuario o contraseña son incorrectos.";
		}
	}

?>