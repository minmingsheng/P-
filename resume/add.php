<?php 

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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/main.css">
	<body>
		<div class="container">
			<div class="wraper">
				<div class='title pagewidth'>
					<h1>MINMING SHENG</h1>
					<h2>Interdisciplinary Designer</h2>
					<p>Based on Toronto</p>
				</div>
				<div class="form pagewidth">
					<div class="banner"><h2>Add skill</h2></div>
					<form action="add.php" method="post">
						<select name = 'skillN'>
							<?php foreach ($skills as $key => $value): ?>
								  <option value="<?php echo $skills[$key]["id"] ?>"><?php echo $skills[$key]["name"];  ?></option>										
							<?php endforeach ?>
						</select>
						<input type="submit">
					</form>
					<?php 
						require("function.php");
						show($_POST["skillN"]);
					 ?>

					
				</div>
				

			</div>
		</div>
	</body>
</html>