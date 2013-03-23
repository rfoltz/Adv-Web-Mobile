<?php
/* Source File: dbConnection.php
Name:Robert Foltz
Last Modified By: Robert Foltz
Website Name: Robert Folt's Portfolio
File Description: This is the page houses all the database connection stuff.
*/


# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
//this is for the login and how dreamweaver does it the old way.
$hostname_dbConnection = "localhost";
$database_dbConnection = "robertfo_advweb";
$username_dbConnection = "robertfo_admin";
$password_dbConnection = "Admin01";
$dbConnection = mysql_pconnect($hostname_dbConnection, $username_dbConnection, $password_dbConnection) or trigger_error(mysql_error(),E_USER_ERROR); 

//New way of gaining a db connection
$dsn = 'mysql:host=localhost;dbname=robertfo_advweb';
$db = new PDO($dsn, $username_dbConnection, $password_dbConnection);


?>