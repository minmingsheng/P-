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
		<!-- for Google -->
			<meta name="description" content="My name is Minming Sheng, I'm a front-end web developer&designer based in Toronto, Canada." />
			<meta name="keywords" content="web development, front-end web development, Jason Minming Sheng, toronto, freelance" />
			<meta name="author" content="Minming Sheng" />
			<link rel="author" href="https://plus.google.com/u/0/105615322120201556614">
			<meta name="copyright" content="Minming Sheng, 2016" />

			<!-- for Facebook -->          
			<meta property="og:title" content="Minming Sheng &mdash; Front-End Web Developer" />
			<meta property="og:type" content="website" />
			<meta property="og:image" content="" /> <!-- 1200 x 630 -->
			<meta property="og:url" content="http://minmingsheng.design/" />
			<meta property="og:description" content="My name is Minming Sheng, I'm a front-end web developer based in Toronto, Canada." />

			<!-- for Twitter -->          
			<meta name="twitter:card" content="summary_large_image" />
			<meta name="twitter:title" content="Minming Sheng &mdash; Front-End Web Developer" />
			<meta name="twitter:description" content="My name is Darren Hebner, I'm a front-end web developer based in Toronto, Canada." />
			<meta name="twitter:image:src" content="" /> <!-- 1,024 x 512 -->
			<meta name="twitter:site" content="@smm_jason">
		    <meta name="twitter:creator" content="@smm_jason">

		<link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="img/favicons/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="img/favicons/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="img/favicons/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="img/favicons/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="img/favicons/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="img/favicons/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon-180x180.png">
		<link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="img/favicons/android-chrome-192x192.png" sizes="192x192">
		<link rel="icon" type="image/png" href="img/favicons/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="img/favicons/manifest.json">
		<link rel="mask-icon" href="img/favicons/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="apple-mobile-web-app-title" content="resume">
		<meta name="application-name" content="resume">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="msapplication-TileImage" content="/mstile-144x144.png">
		<meta name="theme-color" content="#ffffff">
			
			<!--[if lt IE 9]>
		        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		    <![endif]-->
	</head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/main.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
	<script type="text/javascript" src="js/isMobile.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<body>
	<!-- <div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div> -->
		<div id = "audioBtn">
			<div><img id = "play" src="img/open.svg" alt="open.svg"></div>
			<div><img id = "mute" src="img/mute.svg" alt="mute.svg"></div>
		</div>
		<div class="gray"></div>
		<div class="showDesx">
			<section>
				<span>x</span>
				<div></div>
			</section>
		</div>
		<div class="showDes">
			<section>
				<span><i class="fa fa-times"></i></span>
				<p><b>asdas</b></p>
				<div></div>
<!-- 			<div>asdads</div>
				<div>asdads</div>
				<div>asdads</div>
				<div>asdads</div> -->
			</section>
		</div>
		<div class="container">
			<div class='toggle'><i class="fa fa-caret-up trigger"></i></div>
			<div class='top-toggle'><i class="fa fa-caret-up trigger"></i></div>
			<div class="wraper">
				<div class='title pagewidth'>
					<h1><a href="https://jasonshengblog.wordpress.com/">MINMING SHENG</a></h1>
					<h2>Interdisciplinary Designer</h2>
					<p>Based in Toronto</p>
				</div>
				<div class='education pagewidth'>
					<div class="banner changColor"><h2>Education</h2></div>
					<div class= "edus">
						<div class="edu">
							<div>
								<p><b>Interactive Multimedia</b></p> <p>SEP 2015 - APR 2016</p>  <p>Sheridan College, Oakville</p>
							</div>
							<div>
								<p><b>Post-Graducate Certificate</b></p>
							</div>
						</div>
						<div class="edu">
							<div>
								<p><b>Interdisciplinary Design </b></p> <p>SEP 2014 - APR 2015</p> <p>NSCAD University, Halifax </p>
							</div>
							<div>
								<p><b>Post-Baccalaureate Certificate</b></p>
							</div>
						</div>
						<div class="edu">
							<div>
								<p><b>Visual Communication</b></p> <p>SEP 2010 - JUN 2014</p> <p>Shanghai University, Shanghai, China</p>
							</div>
							<div>
								<p><b> Bachelor degree of arts</b></p>
							</div>
						</div>
					</div>
				</div>
				<div class='personalSkill pagewidth'>
					<div class="banner changColor"><h2>Personal Skill</h2></div>
					<div class="contentWraper">
						<div class="skillList">
							<ul>
							<?php foreach($skills as $key => $values): ?>
						
								<li class="eachSkill">
									<ul class="skillSet" data-id="<?php echo $skills[$key]["id"] ?>">
										<li><b><?php echo $skills[$key]["name"] ;?></b></li>
										<li>
											<div class="skillBar" ><div style="width:<?php echo $skills[$key]["level"] ?>%"><section class="finger" ><img src="img/finger.svg" alt=""></section></div></div>
										</li>
										<li><b>lv.	<?php echo $skills[$key]["level"] ;?></b></li>
									</ul>
								</li>
							<?php endforeach ?>
							
							</ul>
						</div>
						<div class="skillInfo">
							<div class="infoFeed">

								<div class="intro" >
									<b>Applying: </b>Junior front-end developer or junior ux/ui designer. $24-$30 / hour is my wish. 
								</div>
								<div class="intro" >
									<b>Background: </b>I have graphic-design background with a little bit 3D, drawing, photography, design thinking skill. Just one year graphic design work experience in Shanghai, China.
								</div>
								<div class="intro" >
									<b>Current year: </b>I use one year to learning front-end and back-end development as well as ux/ui design.
								</div>
								<div class="intro" >
									<b>Feeling: </b>I know there are a lot still need to learn but I learn fast and I am eager to know more. I think the importance is not the skill, but mindset.
								</div>
								<div class="intro" >
									<b>Thought: </b>Everything could be fake, but the hands don't, if having a chance to get an interview, I will take my keyboard
									to show what I can do.
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class='workExperience pagewidth'>
					<div class="banner changColor"><h2>Work Experience</h2></div>
					<div>
						<p><b> 2013 - 2014	Herun Group Shanghai Development Co., Ltd.  Shanghai</b><br><br>Graphic Designer</p>
						<p>Took an internship as Graphic Designer to assist in website design and leaflet design.</p>
					</div>
				</div>
				<div class="personalInfo pagewidth">
					<div>
						<ul>
							<li><a href="https://github.com/minmingsheng"><i class="fa fa-github-square"></i></a></li>
							<li><a href="https://www.linkedin.com/in/minming-sheng-9b1746b2"><i class="fa fa-linkedin-square"></a></i></li>
							<li><a href="http://minmingsheng.design"><i class="fa fa-sign-in"></i></a></li>
						</ul>
					</div>
					<p><b>1297 Malborough Crt, Oakville, ON</b></p>
					<p><a href="tel:902-293-8037">(902)-293-8037</a>      <a href="mailto: minming.ca@gmail.com">minming.ca@gmail.com</a></p>
				</div>
			</div>
		</div>
		<div class="pause"><i class="fa fa-file-audio-o"></i></div>
		<audio id="audioElement" src="audio/happy.aac"></audio>
	</body>
</html>