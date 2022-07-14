<?php
	session_start();

	 if(isset($_POST["btn"])) {

    switch($_POST["btn"]) {
			case "free":
				$rol = "free";
				break;
			case "plata":
				$rol = "plata";
				break;
			case "oro":
				$rol = "oro";
				break;
		}

		// $_SESSION["rol"] = $rol;

		// if(!isset($_SESSION["rol"])) {
		// 	$_SESSION["rol"] = $rol;
		// }
		// else {
		// 	$_SESSION["rol"] = $rol;
		// }
	}	
?>