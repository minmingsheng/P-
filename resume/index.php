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
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/main.css">
	<script type="text/javascript" src="js/main.js"></script>
	<body>
		<div class="container">
			<div class="wraper">
				<div class='title pagewidth'>
					<h1><a href="add.php">MINMING SHENG</a></h1>
					<h2>Interdisciplinary Designer</h2>
					<p>Based on Toronto</p>
				</div>
				<div class='education pagewidth'>
					<div class="banner"><h2>Education</h2></div>
					<div class= "edus">
						<div class="edu">
							<div>
								<p><b>POST Graducate Certificate SEP 2015 - APR 2016 </b><br> Sheridan College</p>
							</div>
							<div>
								<p><b>Web Design</b></p>
							</div>
						</div>
						<div class="edu">
							<div>
								<p><b>POST-Baccalaureate Certificate SEP 2014 - APR 2015</b> <br> NSCAD University </p>
							</div>
							<div>
								<p><b>Interdisciplinary Design</b></p>
							</div>
						</div>
						<div class="edu">
							<div>
								<p><b>BACHELOR DEGREE OF ARTS SEP 2010 - JUN 2014</b> <br> Shanghai University</p>
							</div>
							<div>
								<p><b>Visual Communication</b></p>
							</div>
						</div>
					</div>
				</div>
				<div class='personalSkill pagewidth'>
					<div class="banner"><h2>Personal Skill</h2></div>
					<div class="contentWraper">
						<div class="skillList">
							<ul>
							<?php foreach($skills as $key => $values): ?>
						
								<li>
									<ul class="skillSet" data-id="<?php echo $skills[$key]["id"] ?>">
										<li><b><?php echo $skills[$key]["name"] ;?></b></li>
										<li>
											<div class="skillBar" ><div style="width:<?php echo $skills[$key]["level"] ?>%"></div></div>
										</li>
										<li><b>lv.	<?php echo $skills[$key]["level"] ;?></b></li>
									</ul>
								</li>
							<?php endforeach ?>
							
							</ul>
						</div>
						<div class="skillInfo">
							<div class="infoFeed">
							</div>
						</div>
					</div>
				</div>
				<div class='workExperience pagewidth'>
					<div class="banner"><h2>Work Experience</h2></div>
					<div>
						<p><b> 2013 - 2014	Herun Group Shanghai Development Co., Ltd.  Shanghai</b><br><br>Graphic Designer</p>
						<p>Took an internship as Graphic Designer to assist in website designing and leaflet designing .</p>
					</div>
				</div>
				<div class="personalInfo pagewidth">
					<div>
						<ul>
							<li><a href="https://github.com/minmingsheng"><i class="fa fa-github-square"></i></a></li>
							<li><a href="https://www.linkedin.com/in/minming-sheng-9b1746b2"><i class="fa fa-linkedin-square"></a></i></li>
							<li><a href="#"><i class="fa fa-sign-in"></i></a></li>
						</ul>
					</div>
					<p><b>1297 Malborough Crt, Oakville, ON</b></p>
					<p><a href="">(902) -293-8037</a>      <a href="">minming.ca@gmail.com</a></p>
				</div>
			</div>
		</div>
	</body>
</html>