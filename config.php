<?php 
//$conn = mysqli_connect("localhost","root","","phpdb");
//remote database connection 
$conn = mysqli_connect("remotemysql.com"," 65J2cJtdpu","OyKUPGDgl9","65J2cJtdpu");
if(!$conn){
	die("Connection error: " . mysqli_connect_error());	
}
?>