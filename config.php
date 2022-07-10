<?php
	session_start();

	 if(isset($_POST["btn"])) {

    switch($_POST["btn"]) {
			case "free":
				$rol = "free";
				$precio = 0;
				break;
			case "plata":
				$rol = "plata";
				$precio = 30;
				break;
			case "oro":
				$rol = "oro";
				$precio = 50;
				break;
		}

		if(!isset($_SESSION["rol"])) {
			$_SESSION["rol"][0] = $rol;
			$_SESSION["rol"][1] = $precio;
		}
		else {
			$_SESSION["rol"][0] = $rol;
			$_SESSION["rol"][1] = $precio;
		}
	}	
?>