{include file="header.tpl" title=Info}

{* Form for the registration inputs *}
<form method="post" action="register.php">
	<div>
		<div>Name : <input type="text" name="fullname" id="fullname"></input></div>
		<div>User Name : <input type="text" name="user_name" id="user_name"></input></div>
		<div>Password : <input type="text" name="password" id="password"></input></div>
		<div><input type="submit" name="submit" value="submit" ></input></div>
	</div>
</form>

{* 

http://www.9lessons.info/2011/09/smarty-template-engine-using-php.html

For whenever I get a database up n' running:


CREATE TABLE USERS (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
fullname VARCHAR( 255 ) NOT NULL ,
user_name VARCHAR( 255 ) NOT NULL ,
password VARCHAR( 255 ) NOT NULL ,
created_on TIMESTAMP ON UPDATE CURRENT_TIMESTAMP 
NOT NULL DEFAULT CURRENT_TIMESTAMP 
);

*}


{include file="footer.tpl"}