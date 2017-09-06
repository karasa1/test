<?php 
	$database = array();
	$database['host'] = "localhost";
	$database['port'] = '3306';
	$database['name'] = "ideer";
	$database['username'] = "root";
	$database['password'] = "";
	$link = mysqli_connect($database['host'], $database['username'], $database['password'], $database['name']);
?>