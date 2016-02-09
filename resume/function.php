<?php 
		function show($a){
			if(isset($a)){
				// echo $a;
				try{
				include("database.php");
				// $sql = "SELECT `description` FROM `descriptions` WHERE sid=$a";
				$sql = "SELECT skills.name, skills.level, descriptions.description
						FROM descriptions 
						INNER JOIN skills
						ON descriptions.sid=skills.id WHERE descriptions.sid=$a;";
				$result = $db->query($sql);
				$result = $result->fetchAll(PDO::FETCH_ASSOC);
				// echo $a.'<br>';
				// print_r($result); 
				// echo "done";
				}
				catch(PDOException $e)
				{
				echo "Error: " . $e->getMessage();
				}     
				echo "<ul style='align-self = center'>";
				echo "<li style='border:1px solid black; display:inline-block; padding:1em; background:black;color:white; margin-right:1em'>";
				
				if(empty($result[0]['name'])){
					echo "no item found";
				}else{
					echo $result[0]['name'];

				}
				if(empty($result[0]['name'])){
					$lvl= "0";
				}else{
					$lvl= $result[0]['level'];

				}
				echo "</li>";
				foreach($result as $key => $value){
					echo "<li style='border:1px solid black; display:inline-block; padding:1em; margin:0.4em;'>";
					echo $result[$key]['description'];
					echo "</li>";
				}
				echo "</ul>";

				
				/*create form*/
				echo"<form action='process.php' method='post' class='showup'>
		<ul>
			<li>
				<ul>
					
					<input type='text' id='skillname' name='des1' placeholder='Add description..'>
				</ul>
				
			</li>
			<li>
				
				<input type='text' id='skillname' name='des2' placeholder='Add description..'>
			</li>
			<li>
				<input type='text' id='skillname' name='des3' placeholder='Add description..'>
			</li>
			<li>
			
				<input type='number' id='skillname' name='level' placeholder='".$lvl."'>
			</li>
			<li>
				<input type='submit' value = 'submit'>
			</li>
		</ul>
	</form>";
			}
		}

		
		function getSkills(){
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
		}
 ?>