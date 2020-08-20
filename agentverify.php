<?php 
session_start();
require_once("config.php");
if(isset($_POST['submit'])){
	$email = trim($_POST['email']);
	$password = trim($_POST['password']);
	
	$sql = "select * from users where email = '".$email."'";
    
	$rs = mysqli_query($conn,$sql);
	$numRows = mysqli_num_rows($rs);
	
	if($numRows  == 1){
		$row = mysqli_fetch_assoc($rs);
        $_SESSION['fname']=$row['fname'];
		if(password_verify($password,$row['password'])){
			echo "Password verified";
            header("location:dateentry.php");
		}
		else{
			echo "Wrong Password";
		}
	}
	else{
		echo "No User found";
	}
}
?> 