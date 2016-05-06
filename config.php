

<?php 
	$dbHost = "localhost";
	$dbUser = "username";
	$dbPassword = "password";
	$dbName = "database";
	$con = mysql_connect($dbHost, $dbUser, $dbPassword);
	$sel = mysql_select_db($dbName, $con) or mysql_error();
?>