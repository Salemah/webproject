<?php

	$dbuser = 'root';
	$dbpass = '';
	$host 	= 'localhost';
	$dbname	= 'tourmanagement';


	function getConnection(){

		global $dbname, $dbpass, $dbuser, $host;
		$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
		return $conn;
	}

?>