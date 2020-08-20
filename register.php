<?php 
require_once("config.php");
if(isset($_POST['submit'])){
		$fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $gender=$_POST['gender'];
        $password=$_POST['password'];
        $confirm=$_POST['confirm'];
		
		$options = array("cost"=>6);
		$hashPassword = password_hash($password,PASSWORD_BCRYPT,$options);
        $hashPassword_confirm = password_hash($password,PASSWORD_BCRYPT,$options);
        $sql = "select * from customer where email = '".$email."'";
	    $rs = mysqli_query($conn,$sql);
	    $numRows = mysqli_num_rows($rs);
        if($numRows ==0){
		
		$sql = "insert into customer(fname,lname,email,gender,password,confirm) value('".$fname."', '".$lname."', '".$email."','".$gender."','".$hashPassword."','".$hashPassword_confirm."')";
		$result = mysqli_query($conn, $sql);
		if($result)
		{
			echo "Registration successfully";
		}
    else{
        echo "not successful";
    }
	}
    else
    {
        echo "email already Exist";
    }

}
?>