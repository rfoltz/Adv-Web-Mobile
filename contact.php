<!DOCTYPE html> 
<html>
<head>
	<!--
	File name: contact.php
	Author's name: Robert Foltz
	Web site name: www.robertfoltz.com/mobile
	File description: This is the jQuery Mobile Web App for my website so mobile devices have a better experience with my site.
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

	<!--Contact Page -->
	<div data-role="page" data-theme="a" id="contact-page" data-add-back-btn="true">
		<!--Page header -->
		<header data-role="header">
            <h1>Contact Page</h1>
        </header><!-- /header -->
        <!--Saved my logo as a SVG file to save space. -->
    	<object id="logo-svg" data="imgs/logo-black.svg" type="image/svg+xml"></object>
		<!--Here's the nav bar it's just 2 grids filled with buttons-->
		<div class="ui-grid-b">
			<div class="ui-block-a"><a href="index.php" data-role="button" data-mini="true" data-icon="home" data-iconpos="top" data-corners="false" data-theme="a">Home</a></div>
			<div class="ui-block-b"><a href="about.php" data-role="button" data-mini="true" data-icon="edit" data-iconpos="top" data-corners="false" data-theme="a">About Me</a></div>
			<div class="ui-block-c"><a href="contact.php" class="ui-btn-active" data-role="button" data-mini="true" data-icon="search" data-iconpos="top" data-corners="false" data-theme="a">Contact</a></div>
		</div><!-- /grid-b -->
		<div class="ui-grid-b">
			<div class="ui-block-a"><a href="projects.php" data-role="button" data-mini="true" data-icon="gear" data-iconpos="top" data-corners="false" data-theme="a">Projects</a></div>
			<div class="ui-block-b"><a href="services.php" data-role="button" data-mini="true" data-icon="check" data-iconpos="top" data-corners="false" data-theme="a">Services</a></div>
			<div class="ui-block-b"><a href="login.php" data-role="button" data-mini="true" data-icon="grid" data-iconpos="top" data-corners="false" data-theme="a">Login</a></div>
		</div><!-- /grid-b -->
    	
    	<!--Page content -->
        <section data-role="content">
        	<h1>Contact Me!</h1>
        	<p><span class="bold">Name: </span>Robert Foltz</p>
        	<p><span class="bold">Phone Number: </span><a href="tel:+17057964981">1-705-796-4981</a></p>
        	<p><span class="bold">Address: </span>34 Curtiss Court, Barrie, Ontario, Canada</p>
        	<p><span class="bold">Email: </span><a href="mailto:me@robertfoltz.com">me@robertfoltz.com</a></p>
        	
        	<h2>Follow me on one of these networks!</h2>
        	<a href="//plus.google.com/109073700143949670409?prsrc=3" rel="publisher" style="text-decoration:none;">
			<img src="//ssl.gstatic.com/images/icons/gplus-32.png" alt="Google+" style="border:0;width:32px;height:32px;"/></a>
			<a href="//ca.linkedin.com/pub/robert-foltz/63/b61/593" rel="" style="text-decoration:none;">
			<img src="imgs/linkedin_32.png" alt="LinkedIn" style="border:0;width:32px;height:32px;"/></a>
			<a href="http://www.youtube.com/user/FatherBadT0uch?feature=creators_cornier-%2F%2Fs.ytimg.com%2Fyt%2Fimg%2Fcreators_corner%2FYouTube%2F40x40_yt_red.png"><img src="//s.ytimg.com/yt/img/creators_corner/YouTube/40x40_yt_red.png" style="width:32px; height:32px;" alt="Subscribe to me on YouTube"/></a><img src="//www.youtube-nocookie.com/gen_204?feature=creators_cornier-//s.ytimg.com/yt/img/creators_corner/YouTube/40x40_yt_red.png" style="display: none"/>
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