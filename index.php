<!DOCTYPE html> 
<html>
<head>
	<!--
	File name:index.html
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

	<!--Home Page -->
	<!-- the data-add-back-btn="true" auto generates a back button in the headers -->
	<div data-role="page" data-theme="a" id="home-page" data-add-back-btn="true">
		<!-- No header on the home-page because it's really not needed -->
        <!--Saved my logo as a SVG file to save space. -->
    	<object id="logo-svg" data="imgs/logo-black.svg" type="image/svg+xml"></object>
		<!--Here's the nav bar it's just 2 grids filled with buttons-->
		<div class="ui-grid-b">
			<div class="ui-block-a"><a href="#home-page" class="ui-btn-active" data-role="button" data-mini="true" data-icon="home" data-iconpos="top" data-corners="false" data-theme="a">Home</a></div>
			<div class="ui-block-b"><a href="#about-page" data-role="button" data-mini="true" data-icon="edit" data-iconpos="top" data-corners="false" data-theme="a">About Me</a></div>
			<div class="ui-block-c"><a href="#contact-page" data-role="button" data-mini="true" data-icon="search" data-iconpos="top" data-corners="false" data-theme="a">Contact</a></div>
		</div><!-- /grid-b -->
		<div class="ui-grid-b">
			<div class="ui-block-a"><a href="#projects-page" data-role="button" data-mini="true" data-icon="gear" data-iconpos="top" data-corners="false" data-theme="a">Projects</a></div>
			<div class="ui-block-b"><a href="#services-page" data-role="button" data-mini="true" data-icon="check" data-iconpos="top" data-corners="false" data-theme="a">Services</a></div>
			<div class="ui-block-b"><a href="#login-page" data-role="button" data-mini="true" data-icon="grid" data-iconpos="top" data-corners="false" data-theme="a">Login</a></div>
		</div><!-- /grid-b -->
    	
    	<!-- Content -->
        <section data-role="content">
        	<p>Here is my featured work:</p>
            <section class="slider">
				<div class="flexslider">
				  <ul class="slides">
					<li>
					<a href="#projects-page"><img src="imgs/mobile.png" alt="iPhone Image"/></a>
					</li>
					<li>
					 <a href="#projects-page"><img src="imgs/game.png" alt="Game Image"/></a>
					</li>
					<li>
					 <a href="#projects-page"><img src="imgs/youtube.png" alt="Youtube Image"/></a>
					</li>
				  </ul>
				</div>
			  </section>
        </section><!-- /content -->
    
        <footer data-role="footer">
            <h4>Copyright of Robert Foltz 2013</h4>
            <h4><a data-rel="external" href="http://www.robertfoltz.com/test/?full=true">Full Site</a></h4>
        </footer><!-- /footer -->
	</div><!-- /page -->
	
	
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
			<div class="ui-block-a"><a href="#home-page" data-role="button" data-mini="true" data-icon="home" data-iconpos="top" data-corners="false" data-theme="a">Home</a></div>
			<div class="ui-block-b"><a href="#about-page" class="ui-btn-active" data-role="button" data-mini="true" data-icon="edit" data-iconpos="top" data-corners="false" data-theme="a">About Me</a></div>
			<div class="ui-block-c"><a href="#contact-page" data-role="button" data-mini="true" data-icon="search" data-iconpos="top" data-corners="false" data-theme="a">Contact</a></div>
		</div><!-- /grid-b -->
		<div class="ui-grid-b">
			<div class="ui-block-a"><a href="#projects-page" data-role="button" data-mini="true" data-icon="gear" data-iconpos="top" data-corners="false" data-theme="a">Projects</a></div>
			<div class="ui-block-b"><a href="#services-page" data-role="button" data-mini="true" data-icon="check" data-iconpos="top" data-corners="false" data-theme="a">Services</a></div>
			<div class="ui-block-b"><a href="#login-page" data-role="button" data-mini="true" data-icon="grid" data-iconpos="top" data-corners="false" data-theme="a">Login</a></div>
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
			<div class="ui-block-a"><a href="#home-page" data-role="button" data-mini="true" data-icon="home" data-iconpos="top" data-corners="false" data-theme="a">Home</a></div>
			<div class="ui-block-b"><a href="#about-page" data-role="button" data-mini="true" data-icon="edit" data-iconpos="top" data-corners="false" data-theme="a">About Me</a></div>
			<div class="ui-block-c"><a href="#contact-page" class="ui-btn-active" data-role="button" data-mini="true" data-icon="search" data-iconpos="top" data-corners="false" data-theme="a">Contact</a></div>
		</div><!-- /grid-b -->
		<div class="ui-grid-b">
			<div class="ui-block-a"><a href="#projects-page" data-role="button" data-mini="true" data-icon="gear" data-iconpos="top" data-corners="false" data-theme="a">Projects</a></div>
			<div class="ui-block-b"><a href="#services-page" data-role="button" data-mini="true" data-icon="check" data-iconpos="top" data-corners="false" data-theme="a">Services</a></div>
			<div class="ui-block-b"><a href="#login-page" data-role="button" data-mini="true" data-icon="grid" data-iconpos="top" data-corners="false" data-theme="a">Login</a></div>
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
			<div class="ui-block-a"><a href="#home-page" data-role="button" data-mini="true" data-icon="home" data-iconpos="top" data-corners="false" data-theme="a">Home</a></div>
			<div class="ui-block-b"><a href="#about-page" data-role="button" data-mini="true" data-icon="edit" data-iconpos="top" data-corners="false" data-theme="a">About Me</a></div>
			<div class="ui-block-c"><a href="#contact-page" data-role="button" data-mini="true" data-icon="search" data-iconpos="top" data-corners="false" data-theme="a">Contact</a></div>
		</div><!-- /grid-b -->
		<div class="ui-grid-b">
			<div class="ui-block-a"><a href="#projects-page" data-role="button" data-mini="true" data-icon="gear" data-iconpos="top" data-corners="false" data-theme="a">Projects</a></div>
			<div class="ui-block-b"><a href="#services-page" data-role="button" data-mini="true" data-icon="check" data-iconpos="top" data-corners="false" data-theme="a">Services</a></div>
			<div class="ui-block-b"><a href="#login-page" data-role="button" data-mini="true" data-icon="grid" data-iconpos="top" data-corners="false" data-theme="a">Login</a></div>
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
	
	
	<!--Services Page -->
	<div data-role="page" data-theme="a" id="services-page" data-add-back-btn="true">
		<header data-role="header">
            <h1>Services Page</h1>
        </header><!-- /header -->
        <!--Saved my logo as a SVG file to save space. -->
    	<object id="logo-svg" data="imgs/logo-black.svg" type="image/svg+xml"></object>
		<!--Here's the nav bar it's just 2 grids filled with buttons-->
		<div class="ui-grid-b">
			<div class="ui-block-a"><a href="#home-page" data-role="button" data-mini="true" data-icon="home" data-iconpos="top" data-corners="false" data-theme="a">Home</a></div>
			<div class="ui-block-b"><a href="#about-page" data-role="button" data-mini="true" data-icon="edit" data-iconpos="top" data-corners="false" data-theme="a">About Me</a></div>
			<div class="ui-block-c"><a href="#contact-page" data-role="button" data-mini="true" data-icon="search" data-iconpos="top" data-corners="false" data-theme="a">Contact</a></div>
		</div><!-- /grid-b -->
		<div class="ui-grid-b">
			<div class="ui-block-a"><a href="#projects-page" data-role="button" data-mini="true" data-icon="gear" data-iconpos="top" data-corners="false" data-theme="a">Projects</a></div>
			<div class="ui-block-b"><a href="#services-page" data-role="button" data-mini="true" data-icon="check" data-iconpos="top" data-corners="false" data-theme="a">Services</a></div>
			<div class="ui-block-b"><a href="#login-page" data-role="button" data-mini="true" data-icon="grid" data-iconpos="top" data-corners="false" data-theme="a">Login</a></div>
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
	
	
	<!--Business Contacts Login Page -->
	<div data-role="page" data-theme="a" id="login-page" data-add-back-btn="true">
		<header data-role="header">
            <h1>Business Contacts</h1>
        </header><!-- /header -->
        <!--Saved my logo as a SVG file to save space. -->
    	<object id="logo-svg" data="imgs/logo-black.svg" type="image/svg+xml"></object>
		<!--Here's the nav bar it's just 2 grids filled with buttons-->
		<div class="ui-grid-b">
			<div class="ui-block-a"><a href="#home-page" data-role="button" data-mini="true" data-icon="home" data-iconpos="top" data-corners="false" data-theme="a">Home</a></div>
			<div class="ui-block-b"><a href="#about-page" data-role="button" data-mini="true" data-icon="edit" data-iconpos="top" data-corners="false" data-theme="a">About Me</a></div>
			<div class="ui-block-c"><a href="#contact-page" data-role="button" data-mini="true" data-icon="search" data-iconpos="top" data-corners="false" data-theme="a">Contact</a></div>
		</div><!-- /grid-b -->
		<div class="ui-grid-a">
			<div class="ui-block-a"><a href="#projects-page" data-role="button" data-mini="true" data-icon="gear" data-iconpos="top" data-corners="false" data-theme="a">Projects</a></div>
			<div class="ui-block-b"><a href="#services-page" data-role="button" data-mini="true" data-icon="check" data-iconpos="top" data-corners="false" data-theme="a">Services</a></div>
		</div><!-- /grid-b -->
    	
    	<!--Page Content -->
        <section data-role="content">
        	<h1>Login to see Business Contacts</h1>
        	<form action="#" method="post">
				Username:<input type="text" name="username">
				Password:<input type="password" name="password">
				<input style="float:right;" type="submit" value="Login">
			</form>
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