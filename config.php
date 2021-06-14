<?php

$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "tsf_bank";

	$conn = mysqli_connect($db_host,$db_user,$db_password,$db_name);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>