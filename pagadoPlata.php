<?php 
	$json = file_get_contents("php://input");
	$datos = json_decode($json, true);

	if(is_array($datos)) {
		// $status = $datos["detalles"]["status"];
		// echo $status;
		session_start();
		$_SESSION["pagadoPlata"] = true;
		// echo "<script>window.location.href='register.php';</script>";
	}
	else {
		// echo "<script>window.location.href='login.php';</script>";
	}
?>