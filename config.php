<?php 
$conn = mysqli_connect("localhost","root","","phpdb");
 
if(!$conn){
	die("Connection error: " . mysqli_connect_error());	
}
?>