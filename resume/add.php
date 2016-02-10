<?php 
	session_start();
		try{
		include("database.php");
		$sql = "SELECT * FROM `skills`";
		$result = $db->query($sql);
		$skills = $result->fetchAll(PDO::FETCH_ASSOC);
		// echo "Done!"
		;}
		catch(PDOException $e)
		{
		echo "Error: " . $e->getMessage();
		}     


?>
<!DOCTYPE html>
<html>
	<head>
		<title>resume</title>
	</head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/main.css">
	<body>
		<div class="container">
			<div class="wraper">
				<div class='title pagewidth'>
					<h1><a href="index.php">MINMING SHENG</a></h1>
					<h2>Interdisciplinary Designer</h2>
					<p>Based on Toronto</p>
				</div>
				<div class="form pagewidth color">
					<div class="banner"><h2>Add skill</h2></div>
					<form action="add.php" method="post">
						<select name = 'skillN' placeholder="asd">
							 <option value="" disabled selected>Select one skill to add point..</option>
							<?php foreach ($skills as $key => $value): ?>
								  <option value="<?php echo $skills[$key]["id"] ?>"><?php echo $skills[$key]["name"];  ?></option>										
							<?php endforeach ?>
						</select>
						<input class='btn' type="submit" value="search">
					</form>
					<?php 
						if(!empty($_POST["skillN"])){
							require("function.php");
							show($_POST["skillN"]);
							// echo $_POST["skillN"];
							$_SESSION['skillN']=$_POST["skillN"];
							// echo $_SESSION['skillN'];

							$sql = "INSERT INTO `resume`.`descriptions` (`id`, `sid`, `description`) VALUES (NULL, '1', 'Manipulate picture'";
						}
					 ?>

					
				</div>
				

			</div>
		</div>
	</body>
</html>