<?php 
//$conn = mysqli_connect("localhost","root","","phpdb");
//remote database connection 
$conn = mysqli_connect("remotemysql.com"," 65J2cJtdpu","QNf4fmLUZ1","65J2cJtdpu");
if(!$conn){
    echo "not successfull";
	die("Connection error: " . mysqli_connect_error());	
}
?>
