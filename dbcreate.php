<?php include 'flag.php';

	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$db = "";
	
	// Create connection
	$con = new mysqli($servername, $dbusername, $dbpassword); 
	if ($con->connect_error) {
		die("Connection failed: " . $con->connect_error);
	}

	// Create Database
	$sql_create_db = "CREATE DATABASE IF NOT EXISTS et";
	if ($con->query(sql_create_db) == TRUE) $this->setFlag("db","TRUE");
	else $this->setFlag("db","FALSE");
	
	// Create Tables
	
	$sql_cteate_table = "CREATE TABLE IF NOT EXISTS et_user (
		uid int(8) NOT NULL AUTO_INCREMENT,
		username varchar(16) NOT NULL,
		email varchar(30) NOT NULL,
		no varchar(10) NOT NULL,
		PRIMARY KEY (uid),
		UNIQUE (username,email,no)
	);";
		
	$sql_cteate_table .= "CREATE TABLE IF NOT EXISTS et_profile (
		uid int(8),
		username varchar(16) NOT NULL,
		fname varchar(20) NOT NULL,
		lname varchar(20) NOT NULL,
		gender binary NOT NULL,
		city varchar(30) NOT NULL,
		country varchar(30) NOT NULL,
		state varchar(30) NOT NULL,
		PRIMARY KEY (username),
		FOREIGN KRY (uid) REFERENCES et_user(uid)
	);";
		
	$sql_cteate_table .= "CREATE TABLE IF NOT EXISTS et_flag (
		uid int(8),
		username varchar(16) NOT NULL,
		guest binary NOT NULL,
		status binary NOT NULL,
		link binary NOT NULL,
		PRIMARY KEY (username),
		FOREIGN KRY (uid) REFERENCES et_user(uid)
	);";
	
	$sql_cteate_table .= "CREATE TABLE IF NOT EXISTS et_default (
		uid int(8),
		did int(8) NOT NULL,
		budget int(10) NOT NULL,
		daily int(3) NOT NULL,
		PRIMARY KEY (did),
		FOREIGN KRY (uid) REFERENCES et_user(uid)
	);";
	
	$sql_cteate_table .= "CREATE TABLE IF NOT EXISTS et_expense (
		uid int(8),
		eid int(8) NOT NULL,
		title varchar(30) NOT NULL,
		money int(6) NOT NULL,
		location varchar(30),
		time datetime NOT NULL,
		category int(4),
		comment varchar2(128),
		daily binary,
		PRIMARY KEY (eid),
		FOREIGN KRY (uid) REFERENCES et_user(uid)
	);";
	
	$sql_cteate_table .= "CREATE TABLE IF NOT EXISTS et_date (
		uid int(8),
		username varchar(16) NOT NULL,
		signup datetime NOT NULL,
		login datetime NOT NULL,
		backup datetime,
		restore datetime,
		trans datetime,
		PRIMARY KEY (username),
		FOREIGN KRY (uid) REFERENCES et_user(uid)
	);";
	
	if ($con->multi_query($sql_cteate_table) === TRUE) $this->setFlag("table","TRUE");
	else $this->setFlag("table","FALSE");
	
	$con->close();
?>