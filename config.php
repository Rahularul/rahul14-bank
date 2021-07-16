<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "HDL BANK";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Couldn't connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>