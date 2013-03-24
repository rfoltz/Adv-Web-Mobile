<?php require_once('Connections/dbConnection.php'); ?>
<?php require_once('Connections/authorize.php'); ?>

<!DOCTYPE html> 
<html>
<head>
	<!--
	File name: login.php
	Author's name: Robert Foltz
	Web site name: www.robertfoltz.com/mobile
	File description: This is the page where users go to log into the business contacts.
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
	<div data-role="page" data-theme="a" id="login-page" data-add-back-btn="true">
		<header data-role="header">
            <h1>Login</h1>
        </header><!-- /header -->
		<!-- No header on the home-page because it's really not needed -->
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
			<div class="ui-block-b"><a href="services.php" data-role="button" data-mini="true" data-icon="check" data-iconpos="top" data-corners="false" data-theme="a">Services</a></div>
			<div class="ui-block-b"><a href="login.php" class="ui-btn-active" data-role="button" data-mini="true" data-icon="grid" data-iconpos="top" data-corners="false" data-theme="a">Login</a></div>
		</div><!-- /grid-b -->
    	
    	<!-- Content -->
        <section data-role="content" >
        	<h1>Log into Business Contacts</h1>
        	<form data-ajax="false" action="<?php echo $loginFormAction; ?>" method="POST" enctype="multipart/form-data" id="login_form">
				<label for="username">Username:</label>
				<input type="text" id="username" name="username">
				<label for="password">Password:</label>
				<input type="password" id="password" name="password">
				<input type="submit" id="password" value="Login">
			</form>
        </section><!-- /content -->
    
        <footer data-role="footer">
            <h4>Copyright of Robert Foltz 2013</h4>
            <h4><a data-rel="external" href="http://www.robertfoltz.com/test/?full=true">Full Site</a></h4>
        </footer><!-- /footer -->
	</div><!-- /page -->
	
	<!-- Load my JS and Plugins at the bottom for site speed -->
	<script src="js/jquery.flexslider-min.js"></script>
    <script src="js/main.js"></script>
	
</body>
</html>