<?php 
	try{
	include("database.php");
	$sql = "SELECT * FROM `descriptions`";
	$result = $db->query($sql);
	$result = $result->fetchAll(PDO::FETCH_ASSOC);
	// echo "done";
	;}
	catch(PDOException $e)
	{
	echo "Error: " . $e->getMessage();
	}     
	// var_dump($result);
	echo json_encode($result);
 ?>