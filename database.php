<?php
	$servername = 'localhost';
	$username = 'root';
	$password = 'mysql';

	//Create connection
	$con =  mysqli_connect($servername, $username, $password);

	//Check connection
	if($con->connect_error){
		die("Connection failed");
	}
	echo "Connected succesfully";

?>
