<?php 

	if ($_POST["submit"]) {
		
		$result="Email sent!";
		
		if (!$_POST["name"]) {
			$error="<br />
Please enter your name.";
		}
		
		if (!$_POST["email"]) {
			$error.="
<br />
Please enter your email address.";
		}
		
		if (!$_POST["comment"]) {
			$error.="
<br />
Please enter you a comment before submitting.";
		}
		
		if ($_POST["email"] != "" AND !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
			echo "VALID";
			$error.="
<br />
Please enter a valid email address.";
		}
		
		if ($error) {
			$result='
<div class = "alert alert-danger" id = "alert_message">There were errors submitting your form: '.$error.'</div>
';
		} else {
			if (mail("kcfrontdev@gmail.com", "Comment from kcgraphicmedia.com!", "Name: ".$_POST['name']." Email: ".$_POST['email']." Comment: ".$_POST['comment'])) {
				$result='
<div class = "alert alert-success" id = "alert_message">Thank you! I will be in touch!</div>
';
			} else {
				$result="Sorry there was an error sending your message, please try again.";
			}
		}
	}

 ?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Untitled</title>
	<link rel="stylesheet" href="lib/css/global.css">
	<link rel="stylesheet" href="lib/css/flickity.css" media="screen">
	<link rel="stylesheet" href="lib/css/form_get.css" >
	<title>Sass Practice</title>
</head>
<body>
	<div class="home-container">
		<nav>
			<div class="logo">
				<img src="lib/imgs/logo_v4.png" title="Logo" alt="site-logo"></div>
			<div class="links-mobile">
				<img src="lib/imgs/icons/burger.png">
				<a href="#skills">
					<div class="links-mobile-content">
							<p>Skills</p>					
					</div>
				</a>
				<a href="#work">
					<div class="links-mobile-content dos">
							<p>Work</p>					
					</div>
				</a>
				<a href="#testimonials">
					<div class="links-mobile-content tres">
							<p>Testemonials</p>					
					</div>
				</a>
				<a href="#contact">
					<div class="links-mobile-content quat">
							<p>Contact</p>					
					</div>
				</a>
			</div>
			<div class="links">
				<ul>
					<li>
						<a href="#skills">Skills</a>
					</li>
					<li>
						<a href="#work">Work</a>
					</li>
					<li>
						<a href="#testimonials">Testemonials</a>
					</li>
					<li>
						<a href="#contact">Contact</a>
					</li>
				</ul>
			</div>

		</nav>
		<div class="hero-wrapper" style="clear:both;">
			<div class="primary-title">
				<span class="title-style"></span>
			</div>
		</div>
		<div class="clear"></div>
		<div class="break mobile-break">
			<div class="container " id="remove">
				<h1>About Me</h1>
			</div>
			<div class="icons-top">
				<div class="icon">
					<img src="lib/imgs/icons/adobe-photoshop.svg"></div>
				<div class="icon">
					<img src="lib/imgs/icons/github-logo.svg"></div>
				<div class="icon">
					<img src="lib/imgs/icons/html-5-logo.svg"></div>
				<div class="icon">
					<img src="lib/imgs/icons/javascript.svg"></div>
				<div class="icon">
					<img src="lib/imgs/icons/css-3-logo.svg"></div>
				<div class="icon">
					<img src="lib/imgs/icons/wordpress.svg"></div>
			</div>
		</div>
		<section>
			<div class="container-about">
				<div class="left-col">
					<div class="prof-pic"></div>
				</div>
				<div class="right-col">

					<div class="about-me">
						<div class="icons-bottom">
							<div class="icon">
								<img src="lib/imgs/icons/adobe-photoshop.svg"></div>
							<div class="icon">
								<img src="lib/imgs/icons/github-logo.svg"></div>
							<div class="icon">
								<img src="lib/imgs/icons/html-5-logo.svg"></div>
							<div class="icon">
								<img src="lib/imgs/icons/javascript.svg"></div>
							<div class="icon">
								<img src="lib/imgs/icons/css-3-logo.svg"></div>
							<div class="icon">
								<img src="lib/imgs/icons/wordpress.svg"></div>
						</div>
						<p>
							Hi, My Name is Kyle Coleman, and welcome to my portfolio. I am a very goal oriented, motivated, creative that can bring value to any company. I am great with people, have a passion for development, and am obsessive about my design work. I can be quite a versatile resource and put 100% effort into everything I do. For inquiries or information about my services please contact me at <a href="mailto:kcfrontdev@gmail.com">kcfrontdev@gmail.com</a> or us the <a href="#contact">contact form</a> at the bottom of the page. Thanks and I look forward to speaking with you!
						</p>
					</div>
				</div>
			</div>
		</section>
		<div class="skills-section" id="skillBars">
			<div class="skills-container" id="skills">
				<div class="inside-cont-label">
					<div class="glue">
						<div class="inside-box">
							<span class="fontstyles">HTML5</span>
						</div>

						<div class="bar">
							<div class="bar-fill" id="bar1"></div>
							<div class="tic"></div>
							<div class="tic"></div>
							<div class="tic"></div>
							<div class="tic"></div>
						</div>
					</div>

					<div class="glue">
						<div class="inside-box">
							<span class="fontstyles">CSS</span>
						</div>

						<div class="bar">
							<div class="bar-fill" id="bar2"></div>
							<div class="tic"></div>
							<div class="tic"></div>
							<div class="tic"></div>
							<div class="tic"></div>
						</div>
					</div>

					<div class="glue">
						<div class="inside-box">
							<span class="fontstyles">SEO</span>
						</div>

						<div class="bar">
							<div class="bar-fill" id="bar3"></div>
							<div class="tic"></div>
							<div class="tic"></div>
							<div class="tic"></div>
							<div class="tic"></div>
						</div>
					</div>

					<div class="glue">
						<div class="inside-box">
							<span class="fontstyles">PHOTOSHOP</span>
						</div>

						<div class="bar">
							<div class="bar-fill" id="bar4"></div>
							<div class="tic"></div>
							<div class="tic"></div>
							<div class="tic"></div>
							<div class="tic"></div>
						</div>
					</div>

				</div>
				<div class="inside-cont-label">
					<div class="glue">
						<div class="inside-box">
							<span class="fontstyles">JAVASCRIPT</span>
						</div>

						<div class="bar">
							<div class="bar-fill" id="bar5"></div>
							<div class="tic"></div>
							<div class="tic"></div>
							<div class="tic"></div>
							<div class="tic"></div>
						</div>
					</div>

					<div class="glue">
						<div class="inside-box">
							<span class="fontstyles">SASS</span>
						</div>

						<div class="bar">
							<div class="bar-fill" id="bar6"></div>
							<div class="tic"></div>
							<div class="tic"></div>
							<div class="tic"></div>
							<div class="tic"></div>
						</div>
					</div>

					<div class="glue">
						<div class="inside-box">
							<span class="fontstyles">GITHUB</span>
						</div>

						<div class="bar">
							<div class="bar-fill" id="bar7"></div>
							<div class="tic"></div>
							<div class="tic"></div>
							<div class="tic"></div>
							<div class="tic"></div>
						</div>
					</div>

					<div class="glue">
						<div class="inside-box">
							<span class="fontstyles">WORDPRESS</span>
						</div>
						<div class="bar">
							<div class="bar-fill" id="bar8"></div>
							<div class="tic"></div>
							<div class="tic"></div>
							<div class="tic"></div>
							<div class="tic"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="skills-section" id="softskills">
			<div class="skills-container">
				<div class="inside-cont-label" id="inside-cont-label-soft">
					<div class="glue">
						<h1>SOFTSKILLS</h1>
					</div>
					<div class="glue">
						<h3>COMMUNICATION</h3>
					</div>
					<div class="glue">
						<h3>CREATIVE THINKING</h3>
					</div>
					<div class="glue">
						<h3>TIME MANAGEMENT</h3>
					</div>
					<div class="glue">
						<h3>WORK ETHIC</h3>
					</div>
				</div>
				<div class="inside-cont-label" id="inside-cont-label-soft">
					<div class="glue" id="remove">
						<h1>&nbsp;</h1>
					</div>
					<div class="glue">
						<h3>TEAM LEADERSHIP</h3>
					</div>
					<div class="glue">
						<h3>PROJECT MANAGEMENT</h3>
					</div>
					<div class="glue">
						<h3>ADAPTABLE</h3>
					</div>
					<div class="glue">
						<h3>POSITIVE ATTITUDE</h3>
					</div>
					<div class="glue" id="tab-glue">
						<h1>&nbsp;</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="break" id="break-back">
			<div class="container">
				<h1>FEATURED WORK</h1>
			</div>
		</div>
		<div class="cards" id="work">
			<div class="container">
				<div class="quatro">
					<a href="http://www.sdmesa.edu/"  target="_blank" alt="KC Graphic Media's San Diego Mesa College link">
						<div class="contain-one">
							<div class="text-overlay">
								<span class="title">San Diego Mesa College</span>
								<span class="date">Developer || Project Manager</span>
							</div>
							<div class="img-one"></div>
						</div>
					</a>
					<a href="http://www.herbalife24.com/" target="_blank" alt="KC Graphic Media's Herbalife 24 Link">
						<div class="contain-two">
							<div class="text-overlay">
								<span class="title">Herbalife 24</span>
								<span class="date">Developer</span>
							</div>
							<div class="img-two"></div>
						</div>
					</a>
					<a href="http://www.herbalifeextravaganza.com/2016/prague/" target="_blank" alt="KC Graphic Media's Extravaganza Prague Link">
						<div class="contain-three">
							<div class="text-overlay">
								<span class="title">Extravaganza Prague</span>
								<span class="date">Developer</span>
							</div>
							<div class="img-three"></div>
						</div>
					</a>
				</div>
				<div class="quatro">
					<a href="http://www.sdcity.edu/" target="_blank" alt="KC Graphic Media's San Diego City College Link">
						<div class="contain-four">
							<div class="text-overlay">
								<span class="title">San Diego City College</span>
								<span class="date">Webmaster</span>
							</div>
							<div class="img-four"></div>
						</div>
					</a>
					<a href="http://www.minxnailsblog.com/" target="_blank" alt="KC Graphic Media's Minx Nails Blog Link">
						<div class="contain-five">
							<div class="text-overlay">
								<span class="title">Minx Nails</span>
								<span class="date">Developer</span>
							</div>
							<div class="img-five"></div>
						</div>
					</a>
					<a href="http://www.herbalifeskin.com/" target="_blank" alt="KC Graphic Media's Herbalife Skin Link">
						<div class="contain-six">
							<div class="text-overlay">
								<span class="title">Herbalife Skin</span>
								<span class="date">Developer</span>
							</div>
							<div class="img-six"></div>
						</div>
					</a>
				</div>
				<div class="quatro">
					<a href="http://www.sdgmc.org/" target="_blank" alt="KC Graphic Media's San Diego Gay Mens Chorus Link">
						<div class="contain-seven">
							<div class="text-overlay">
								<span class="title">SDGMC Website</span>
								<span class="date">Developer</span>
							</div>
							<div class="img-seven"></div>
						</div>
					</a>
					<a href="http://codepen.io/kylemcoleman/full/grKKoV/" target="_blank" alt="KC Graphic Media's Banner Gallery">
						<div class="contain-eight">
							<div class="text-overlay">
								<span class="title">City Banners</span>
								<span class="date">Design</span>
							</div>
							<div class="img-eight"></div>
						</div>
					</a>
					<a href="http://codepen.io/kylemcoleman/" target="_blank" alt="KC Graphic Media's Codepen">
						<div class="contain-nine">
							<div class="text-overlay">
								<span class="title">Codepen</span>
								<span class="date">Personal Projects</span>
							</div>
							<div class="img-nine"></div>
						</div>
					</a>
					<a href="https://github.com/colemank" target="_blank" alt="KC Graphic Media's Github">
						<div class="contain-ten">
							<div id="testimonials" class="text-overlay">
								<span class="title">Github</span>
								<span class="date">Personal Projects</span>
							</div>
							<div class="img-ten"></div>
						</div>
					</a>
				</div>
			</div>
		</div>
		<section id="caro-section">
			<div class="container" >
				<div class="carousel" data-flickity='{"autoPlay": true }'>
					<div class="carousel-cell">
						<div class="carousel-img" id="caro-one"></div>
						<h3 class="carousel-h3">Janice Jordan - Minx CEO</h3>
						<p class="carousel-p">
							- "So excited about it!  Can I show it off??? I LOVE it!  Kyle you are a Manx!"
						</p>
					</div>
					<div class="carousel-cell">
						<div class="carousel-img" id="caro-two"></div>
						<h3 class="carousel-h3">Trevor McGrath - T &amp; P Dev</h3>
						<p class="carousel-p">- "Well you’re a designer, you make one!"</p>
					</div>
					<div class="carousel-cell">
						<div class="carousel-img" id="caro-three"></div>
						<h3 class="carousel-h3">Chloe Spilotro</h3>
						<p class="carousel-p">- "Looks good but I'm gonna get you a better photo"</p>
					</div>
					<div class="carousel-cell">
						<div class="carousel-img" id="caro-four"></div>
						<h3 class="carousel-h3">Matt Ferrer - T &amp; P Lead Designer</h3>
						<p class="carousel-p">- "I guess this will work..."</p>
					</div>
					<div class="carousel-cell">
						<div class="carousel-img" id="caro-five"></div>
						<h3 class="carousel-h3">Jason Brock - Senior Developer at AgileThought</h3>
						<p class="carousel-p">- "You're a great example of how to work for what you want."</p>
					</div>
					<div class="carousel-cell">
						<div class="carousel-img" id="caro-six"></div>
						<h3 class="carousel-h3">Lori Oldham - City College Student Affairs Coordinator</h3>
						<p class="carousel-p">
							- "You are just so phenomenal!  Please allow me to extend our sincere appreciation to you and your terrific team!"
						</p>
					</div>
				</div>
			</div>
		</section>
		<section class="form" id="contact">
			<div class="container">
				<h3>CONTACT</h3>
				<form method="post">
					<div class="form-group">
						<input type="text" name="name" placeholder="Your Name" class="form-control" value=""></div>

					<div class="form-group">
						<input type="email" name="email" placeholder="Email" class="form-control" value=""></div>

					<div class="form-group">
						<textarea class="form-control" name="comment" placeholder="Comments" ></textarea>
					</div>

					<div>
						<input type="submit" name="submit" class="btn btn-success" value="Submit" style="display: block; width: 100%;"></div>
				</form>
			</div>
		</section>
	</div>
	<script src="https://code.jquery.com/jquery-3.1.0.slim.min.js"   integrity="sha256-cRpWjoSOw5KcyIOaZNo4i6fZ9tKPhYYb6i5T9RSVJG8="   crossorigin="anonymous"></script>
	<script src="lib/js/flickity.pkgd.min.js"></script>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
-->
<script type="text/javascript" src="/lib/js/skills.js"></script>
<!-- <script type="text/javascript">
var waypoint = new Waypoint({
  element: document.getElementById('px-offset-waypoint'),
  handler: function(direction) {
    notify('I am 20px from the top of the window')
  },
  offset: 20 
})
</script>
-->
</body>
</html>