<?php 
	$con = mysqli_connect("localhost","root","","bestgamer");
	if(!$con){
		die('Could not Connect MySql Server:' .mysql_error());
	}
?>