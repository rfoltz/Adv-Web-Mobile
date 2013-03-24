<?php require_once('Connections/dbConnection.php'); ?>
<?php require_once('Connections/authority.php'); ?>

<?php
$query = "select * from contacts order by ContactName asc"; // select the contacts in ASC order.
$contacts = $db->query($query); //get the results from the database.
?>

<!DOCTYPE html> 
<html>
<head>
	<!--
	File name: contacts.php
	Author's name: Robert Foltz
	Web site name: www.robertfoltz.com/mobile
	File description: This is the page that displays the business contacts in the database.
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

	<!--Contacts Page -->
	<!-- the data-add-back-btn="true" auto generates a back button in the headers -->
	<div data-role="page" data-theme="a" id="contacts-page" data-add-back-btn="true">
		<header data-role="header">
            <h1>Contacts</h1>
            <a data-role="button" data-inline="true" data-mini="true" class="ui-btn-right" href="<?php echo $logoutAction ?>" >Logout</a>
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
			<div class="ui-block-b"><a href="login.php" data-role="button" data-mini="true" data-icon="grid" data-iconpos="top" data-corners="false" data-theme="a">Login</a></div>
		</div><!-- /grid-b -->
    	
    	<!-- Content -->
        <section data-role="content">
			<h1>List of Business Contacts</h1>
			<ul data-role="listview" data-filter="true" data-filter-placeholder="Seach Contacts" data-inset="true">
				<?php foreach ($contacts as $contact) : ?>
					<!--<li><a href="#dialogPop<?php echo $contact['ContactId']; ?>""><?php echo $contact['ContactName']; ?></a></li>
					<div data-role="popup" id="dialogPop<?php echo $contact['ContactId']; ?>"" data-overlay-theme="a" data-theme="a" data-dismissible="false" style="max-width:400px;" class="ui-corner-all">
						<div data-role="header" data-theme="a" class="ui-corner-top">
							<h1><?php echo $contact['ContactName']; ?></h1>
						</div>
						<div data-role="content" data-theme="a" class="ui-corner-bottom ui-content">
							<p><?php echo $contact['PhoneNum']; ?></p>
							<p><?php echo $contact['Address']; ?></p>
							<p><?php echo $contact['Email']; ?></p>
							<a href="#" data-role="button" data-inline="true" data-rel="back" data-theme="c">Close</a>
						</div>
					</div>-->
					<li><a href="#popupLogin<?php echo $contact['ContactId']; ?>" data-rel="popup" data-position-to="window"><?php echo $contact['ContactName']; ?></a>
						<div data-role="popup" id="popupLogin<?php echo $contact['ContactId']; ?>" data-theme="a" data-overlay-theme="a" data-theme="a" data-dismissible="true" style="max-width:400px;" class="ui-corner-all">
							<div data-role="footer" data-theme="a" class="ui-corner-top">
								<h1><?php echo $contact['ContactName']; ?></h1>
							</div>
							 <div data-role="content" data-theme="a" class="ui-corner-bottom ui-content">
								<p>Phone Number: <a href="tel:<?php echo $contact['PhoneNum']; ?>"><?php echo $contact['PhoneNum']; ?></a></p>
								<p>Address: <?php echo $contact['Address']; ?></p>
								<p>Email: <a href="mailto:<?php echo $contact['Email']; ?>"><?php echo $contact['Email']; ?></a></p>
								<a href="#" data-role="button" data-rel="back" data-mini="true" data-transition="pop" data-theme="a">Close</a>
							</div>
						</div>
				<?php endforeach; ?>
			</ul>
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