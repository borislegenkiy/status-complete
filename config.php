<?php
	define('DB_HOST', 'localhost');
	define('DB_USER', 'boris387');
	define('DB_PASS', 'jGfYthT4');
	define('DB_NAME', 'boris387_servers_status'); 
	define('USER', 'admin'); 
	define('PASS', 'a12345'); 
	
	
	$db = new mysqli(DB_HOST, DB_USER, DB_PASS,DB_NAME);
	if ($db->connect_error) {
		printf("CONNECT ERROR : %d\n", $db->errno);
		exit();
	}	
?>
