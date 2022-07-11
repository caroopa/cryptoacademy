<?php
	$host = "localhost";
	$bd = "c2231349_crypto";
	$user = "c2231349_crypto";
	$password = "vuvi66duLI";

	try {
		$conexion = new PDO("mysql:host=$host;dbname=$bd",$user,$password);
	} catch (Exception $ex) {
		echo $ex -> getMessage(); 
	}		
?>