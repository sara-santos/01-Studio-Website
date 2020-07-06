<?php 

	$server = "localhost:8889"; // podia ser uma máquina externa 196.345.34.6
	$bdschema = "01";
	$user = 'root';
	$pwd = 'root';

	$connection = mysqli_connect($server, $user, $pwd, $bdschema);

	if (mysqli_connect_error()) {
		echo "Error connecting to database ...";
		exit;
	}

	mysqli_set_charset($connection, "utf8");

?>