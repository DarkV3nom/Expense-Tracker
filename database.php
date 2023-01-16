<?php

class Database
{
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$db = "et";
	
	public function connect() {
		$con = new mysqli($servername, $dbusername, $dbpassword, $db); 
		if ($con->connect_error) {
			die("Connection failed: " . $con->connect_error);
		}
		else return $con;
	}
}
	$con->close();
?>