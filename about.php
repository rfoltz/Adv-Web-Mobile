<!DOCTYPE html> 
<html>
<head>
	<!--
	File name: about.php
	Author's name: Robert Foltz
	Web site name: www.robertfoltz.com/mobile
	File description: This is the about me page.
	-->

	<title>Robert Foltz's Portfolio</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Google Web Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<!-- Custom Theme Roller -->
	<link rel="stylesheet" href="css/themes/custom-theme.css" />
	<!-- Base jQuery Mobile CSS -->
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.0/jquery.mobile.structure-1.3.0.min.css" /> 
	<!--FlexSlider  CSS-->
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	<!-- Local CSS -->
	<link rel="stylesheet" href="css/local.css" />
	<!-- Javascripts -->
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.js"></script>
</head>

<body>
	<!-- Every Item usually uses my custom theme "a" which was created using themeroller -->
	
	
	<!--About Page -->
	<div data-role="page" data-theme="a" id="about-page" data-add-back-btn="true">
		<!-- Page header -->
		<header data-role="header">
            <h1>About Page</h1>
        </header><!-- /header -->
        
        <!--Saved my logo as a SVG file to save space. -->
    	<object id="logo-svg" data="imgs/logo-black.svg" type="image/svg+xml"></object>
		<!--Here's the nav bar it's just 2 grids filled with buttons-->
		<div class="ui-grid-b">
			<div class="ui-block-a"><a href="index.php" data-role="button" data-mini="true" data-icon="home" data-iconpos="top" data-corners="false" data-theme="a">Home</a></div>
			<div class="ui-block-b"><a href="about.php" class="ui-btn-active" data-role="button" data-mini="true" data-icon="edit" data-iconpos="top" data-corners="false" data-theme="a">About Me</a></div>
			<div class="ui-block-c"><a href="contact.php" data-role="button" data-mini="true" data-icon="search" data-iconpos="top" data-corners="false" data-theme="a">Contact</a></div>
		</div><!-- /grid-b -->
		<div class="ui-grid-b">
			<div class="ui-block-a"><a href="projects.php" data-role="button" data-mini="true" data-icon="gear" data-iconpos="top" data-corners="false" data-theme="a">Projects</a></div>
			<div class="ui-block-b"><a href="services.php" data-role="button" data-mini="true" data-icon="check" data-iconpos="top" data-corners="false" data-theme="a">Services</a></div>
			<div class="ui-block-b"><a href="login.php" data-role="button" data-mini="true" data-icon="grid" data-iconpos="top" data-corners="false" data-theme="a">Login</a></div>
		</div><!-- /grid-b -->
    	
    	<!-- Content for the page -->
        <section data-role="content">
        	<h1>About Me!</h1>
        	<img id="mePhoto" src="imgs/robert.jpg" alt="Me, Robert Foltz"/>
        	<p>Title: Programmer Analyst<p>
        	<p>School: Georgian College<p>
        	<p>Favourite Quote: "Truth as always, will be far stranger." - Aurthur C. Clarke</p>
        	<p class="clear">Hi I'm Robert, I program just about anything and everything.</p>
        	<p class="clear">My mission is to become a great programmer. I want to do this because 1. Programming is awesome! 2. Makes me feel cool making something someone might appreciate and 3. Because there's such cool things you can learn from programming.</p>
        	<h2>Bio</h2>
        	<p>Well I've worked in the varying sizes of businesses, small, medium and large corporations. I've done many things from working with customers to resolve issues with software to working with the vice presidents of divisions. I've also worked with old and new programming languages which gave me great insite. Below you will find my CV in PDF form.</p>
        	<a href="media/Robert-Foltz-CV.pdf" data-rel="external">Robert Foltz CV</a>
        </section>
    
        <footer data-role="footer">
            <h4>Copyright of Robert Foltz 2013</h4>
        </footer><!-- /footer -->
	</div><!-- /page -->

	
	<!-- Load my JS and Plugins at the bottom for site speed -->
	<script src="js/jquery.flexslider-min.js"></script>
    <script src="js/main.js"></script>
	
</body>
</html>