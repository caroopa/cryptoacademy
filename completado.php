<?php 
	$json = file_get_contents("php://input");
	$datos = json_decode($json, true);

	if(is_array($datos)) {
		// $status = $datos["detalles"]["status"];
		// echo $status;	
		$pagar = true; 
	}
	else {
		// header("Location:index.php");
	}
?>