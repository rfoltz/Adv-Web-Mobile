<?php
/*Source File: authorize.php
Name:Robert Foltz
Last Modified By: Robert Foltz
Website Name: Robert Folt's Portfolio
File Description: This is the page logs in the user to the contacts.php page.
*/


if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['username'])) {
  $loginUsername=$_POST['username'];
  
  // encrypt password
  $salt = "foo";
  $pepper = "bar";
  $salt = sha1($salt);
  $pepper = sha1($pepper);
  $string = $salt . $_POST['password'] . $pepper;
  $password = sha1($string);
  
  
  
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "contacts.php";
  $MM_redirectLoginFailed = "failure.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_dbConnection, $dbConnection);
  
  $LoginRS__query=sprintf("SELECT username, password FROM `users` WHERE username=%s AND password=%s",
    GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $dbConnection) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
	// successful user authentication
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
  	// failed user authentication
    //header("Location: ". $MM_redirectLoginFailed );
    echo '<script type="text/javascript"> alert("Sorry your username or password are inccorect.");</script>';
  }
}
?>