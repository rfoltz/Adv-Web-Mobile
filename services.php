<!DOCTYPE html> 
<html>
<head>
	<!--
	File name: services.php
	Author's name: Robert Foltz
	Web site name: www.robertfoltz.com/mobile
	File description: This is the page where I show the services I offer.
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
	
	<!--Services Page -->
	<div data-role="page" data-theme="a" id="services-page" data-add-back-btn="true">
		<header data-role="header">
            <h1>Services Page</h1>
        </header><!-- /header -->
        <!--Saved my logo as a SVG file to save space. -->
    	<object id="logo-svg" data="imgs/logo-black.svg" type="image/svg+xml"></object>
		<!--Here's the nav bar it's just 2 grids filled with buttons-->
		<div class="ui-grid-b">
			<div class="ui-block-a"><a href="index.php" data-role="button" data-mini="true" data-icon="home" data-iconpos="top" data-corners="false" data-theme="a">Home</a></div>
			<div class="ui-block-b"><a href="about.php" data-role="button" data-mini="true" data-icon="edit" data-iconpos="top" data-corners="false" data-theme="a">About Me</a></div>
			<div class="ui-block-c"><a href="contact.php" data-role="button" data-mini="true" data-icon="search" data-iconpos="top" data-corners="false" data-theme="a">Contact</a></div>
		</div><!-- /grid-b -->
		<div class="ui-grid-b">
			<div class="ui-block-a"><a href="projects.php" data-role="button" data-mini="true" data-icon="gear" data-iconpos="top" data-corners="false" data-theme="a">Projects</a></div>
			<div class="ui-block-b"><a href="services.php" class="ui-btn-active" data-role="button" data-mini="true" data-icon="check" data-iconpos="top" data-corners="false" data-theme="a">Services</a></div>
			<div class="ui-block-b"><a href="login.php" data-role="button" data-mini="true" data-icon="grid" data-iconpos="top" data-corners="false" data-theme="a">Login</a></div>
		</div><!-- /grid-b -->
    	
    	<!--Page Content -->
        <section data-role="content">
        	<h1>Services</h1>
        	<p>As stated before I am a programmer, I'll program anything and everything. I've used many different technologies old and new, I've worked on Cognos reports for business users and I've worked in Visual Fox pro maintaining an application from around 1994-6. Listed below are the services I provide to customers. But currently at this time since I am in school developing and honing my skills so for the moment I am not providing my services.</p>
        	
        	<h2>Web Development</h2>
        	 <a href="https://github.com/rfoltz/Adv-Web"><img id="projectWeb" src="imgs/iphone.png" alt="Mobile Website"/></a>
        	<p>As your probably know from touring around my website that I do some web development. I've done mobile and tablet web pages for an internal project of Scotiabank that was packaged into a mobile app and published through out the bank.</p>
        	
        	<h2>Desktop Applications</h2>
        	<p>I provide services that also include desktop applications, when working at Arcline (2000) Inc. I had to maintain and develop new features for their software and have had some experience providing support and development for desktop applications.</p>
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