<!DOCTYPE html> 
<html>
<head>
	<!--
	File name: projetcs.php
	Author's name: Robert Foltz
	Web site name: www.robertfoltz.com/mobile
	File description: This is the page where I display my current a past projects.
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
	
	<!--Projects Page -->
	<div data-role="page" data-theme="a" id="projects-page" data-add-back-btn="true">
		<!--Page header -->
		<header data-role="header">
            <h1>Projects Page</h1>
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
			<div class="ui-block-a"><a href="projects.php" class="ui-btn-active" data-role="button" data-mini="true" data-icon="gear" data-iconpos="top" data-corners="false" data-theme="a">Projects</a></div>
			<div class="ui-block-b"><a href="services.php" data-role="button" data-mini="true" data-icon="check" data-iconpos="top" data-corners="false" data-theme="a">Services</a></div>
			<div class="ui-block-b"><a href="login.php" data-role="button" data-mini="true" data-icon="grid" data-iconpos="top" data-corners="false" data-theme="a">Login</a></div>
		</div><!-- /grid-b -->
    	
    	<!-- Page Content -->
        <section data-role="content">
			<h2>My Website</h2>
			 <a href="https://github.com/rfoltz/Adv-Web"><img id="projectWeb" src="imgs/iphone.png" alt="Mobile Website"/></a>
			<p>My website is an on going assignment for my Advance Web Programming class where we are taking a look at HTML5, CSS3, and jQuery to develop webpages. We are focusing more on how to make a website responsive/adaptive to different viewports or devices so our websites look great across all sorts of devices from mobile phones to tablets and desktops. If you would like to see how development is coming along please feel free to click the image to go to the GitHub repo.</p>
		
			<h2>A Simple Twist of Fate </h2>
			<a href="https://github.com/rfoltz/Simple-Twist"><img id="projectGame" src="imgs/game-screen.png" alt="Mobile Website"/></a>
			<p>A Simple Twist of Fate is a text based RPG set in Barrie, Ontario during a Zombie apocalypse. It was developed by my 2 friends and myself who both helped with programming and story writing. The game was programmed in our Grade 12 University programming class where we were being to learn C++, mind you we never got to the point of doing memory management so there are lots of memory leaks and programming wise may have been developed in a somewhat better fashion but it is still fun to play and I'm thinking of going back to it and programming it in Objective-C for the Mac and C# for PC and make it into a somewhat GUI game, where you still type stuff in but maybe there's an 8-Bit character that does some animation depending on what and where you encounter certain things. If you would like to contribute or see how the development of this game is coming along please click the image to go to the GitHub repo.</p>
		
			<h2>Youtube Project</h2>
			<a href="//www.youtube.com/subscription_center?add_user_id=lK_3qFLKvg0HgUZ4u_gT7w&feature=creators_cornier-//s.ytimg.com/yt/img/creators_corner/Subscribe_to_my_videos/YT_Subscribe_128x128_red.png"><img src="//s.ytimg.com/yt/img/creators_corner/Subscribe_to_my_videos/YT_Subscribe_128x128_red.png" alt="Subscribe to me on YouTube"/></a><img src="//www.youtube-nocookie.com/gen_204?feature=creators_cornier-//s.ytimg.com/yt/img/creators_corner/Subscribe_to_my_videos/YT_Subscribe_128x128_red.png" style="display: none"/>
			<p>My youtube channel lacks videos right now, however I want to take on a project that will change that. In the coming months I want to start making more tutorial videos on not so common stuff people do on both mac and pc. Or I would like to start recording some games me and my friends play on Xbox 360 as well as PC because it's always a fun time play with friends as a team on Battlefield 3 or Left 4 Dead.</p>
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