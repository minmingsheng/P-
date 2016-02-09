<?php 
	session_start();

	// echo "skill-number:".$_SESSION['skillN'];
	// echo $_POST["des1"]."<br />";
	// echo $_POST["des2"]."<br />";
	// echo $_POST["des3"]."<br />";
	// echo $_POST["level"]."<br />";
	// require("database.php");
	
		try{
			require("database.php");
			if(!empty($_POST["level"])){
				$sql = "UPDATE `resume`.`skills` SET `level` = :level WHERE `skills`.`id` = :skillN;";
				$stmt = $db->prepare($sql);
				$stmt->bindParam(':level', $_POST["level"]);
				$stmt->bindParam(':skillN', $_SESSION['skillN']);
				$stmt->execute();
			}
			if(!empty($_POST["des1"])){
				$sql = "INSERT INTO `resume`.`descriptions` (`sid`, `description`) VALUES ( :skillN, :description);";
				$stmt = $db->prepare($sql);
				$stmt->bindParam(':description', $_POST["des1"]);
				$stmt->bindParam(':skillN', $_SESSION['skillN']);
				$stmt->execute();
			}
			if(!empty($_POST["des2"])){
				$sql = "INSERT INTO `resume`.`descriptions` (`sid`, `description`) VALUES ( :skillN, :description);";
				$stmt = $db->prepare($sql);
				$stmt->bindParam(':description', $_POST["des2"]);
				$stmt->bindParam(':skillN', $_SESSION['skillN']);
				$stmt->execute();
			}
			if(!empty($_POST["des3"])){
				$sql = "INSERT INTO `resume`.`descriptions` (`sid`, `description`) VALUES ( :skillN, :description);";
				$stmt = $db->prepare($sql);
				$stmt->bindParam(':description', $_POST["des3"]);
				$stmt->bindParam(':skillN', $_SESSION['skillN']);
				$stmt->execute();
			}
			// echo "done";
			header("Location:index.php");
		} catch(PDOException $ex) {
    echo "An Error occured!<br/>"; //user friendly message
    echo $ex->getMessage();

	}

 ?>