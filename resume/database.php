<?php 
	$host = "localhost";
	$dbname = "resume";
	$user = "root" ;
	$password = "root";
	$db = new PDO('mysql:host=localhost; dbname='.$dbname.'; charset=utf8', $user, $password );
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

 ?>