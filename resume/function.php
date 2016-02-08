<?php 
		function show($a){
			if(isset($a)){
				// echo $a;
				try{
				include("database.php");
				$sql = "SELECT `description` FROM `descriptions` WHERE sid=$a";
				$result = $db->query($sql);
				$result = $result->fetchAll(PDO::FETCH_ASSOC);
				
				;}
				catch(PDOException $e)
				{
				echo "Error: " . $e->getMessage();
				}     
				echo "<ul>";
				foreach($result as $key => $value){
					echo "<li style='border:1px solid black; display:inline-block; padding:1em'>";
					echo $result[$key]['description'];
					echo "</li>";
				}
				echo "</ul>";


				/*create form*/
				echo"<form action='process.php' method='post'>
		<ul>
			<li>
				<label for='skillname'><p>description: </p></label><input type='text' id='skillname' >
			</li>
			<li>
				<label for='skillname'><p>description: </p></label><input type='text' id='skillname' >
			</li>
			<li>
				<label for='skillname'><p>description: </p></label><input type='text' id='skillname' >
			</li>
			<li>
				<label for='skillname'><p>level: </p></label><input type='number' id='skillname' >
			</li>
			<li>
				<input type='submit' value = 'submit'>
			</li>
		</ul>
	</form>";
			}
		}
 ?>