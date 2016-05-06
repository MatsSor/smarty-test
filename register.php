
<?php  
	include("config.php");

	if(isset($_POST)){
		$query = "INSERT INTO USERS(fullname,user_name,password) VALUES('".mysql_escape_string($_POST['fullname'])."',
		'"mysql_escape_string($_POST['user_name'])."', '"md5($_POST['password'])."')";

		$result = mysql_query($query);

		if($result){
			echo "<script>window.location='index.php?msg=successfully inserted ';</script>";
		}
	}
?>