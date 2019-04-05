<?php
mysql_connect('localhost','patel631@localhost','FrUj@6?$Aeg');
mysql_select_db('patel631_Capstone');

if(empty($_POST) === false){
	$username=$_POST['username'];
	$password=$_POST['passeword'];
}
else{
	$query = mysql_query("Select count(`*`) from `Admin` where `username` = '$username' and `password`='$password' limit 1");
	
	$result = mysql_query($query)
	if(mysql_num_rows($query) == 1){
		window.location.assign("internal_AddUser.html")
	}
	else{
		window.location.assign("login.html")
		
	}
	
	}
?>


