<?php
	$host = "localhost";
	$user = "aliane";
	$pass = "222018184";
	$db = "carrental";
	
	$conn = new mysqli($host, $user, $pass, $db);
	if($conn->connect_error){
		echo "Failed:" . $conn->connect_error;
	}
?>
