<?php

$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$db = "et";
$con = mysqli_connect($servername, $dbusername, $dbpassword, $db); 
		
$insert = "insert into table et_user(username,email,no) values($user,$email,$no);";
mysqli_query($con,$insert);

?>