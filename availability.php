<html>
<head>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    
    </head>
    <body>
        
<?php 
$conn = mysqli_connect("localhost","root","","phpdb");
 
if(!$conn){
	die("Connection error: " . mysqli_connect_error());	
}

if(isset($_POST['submit'])){
    
    $startdate =$_POST['startdate'];
    $enddate =$_POST['enddate'];
     $image = $_FILES['image'];
      $name = $_POST['name'];
      
     
    
         echo "<br>";
    //print_r($image);
    $imagename = $image['name'];
    $imageerror = $image['error'];
    $imagetmp = $image['tmp_name'];
    
    $imageext = explode('.',$imagename);
    $imagecheck=strtolower(end($imageext));
    
    $imageextstored = array('png','jpg','jpeg');
    
    if(in_array($imagecheck,$imageextstored)){
        $destinationfile ='upload/'.$imagename;
        move_uploaded_file($imagetmp,$destinationfile);
        $q= "INSERT INTO `imageinsert`(`startdate`, `enddate`, `name`, `image`) VALUES ('$startdate','$enddate','$name','$destinationfile')";
        $query =mysqli_query($conn,$q);
       
            
        }
            
    }
    else{
        echo "File Extension is not Matching";
    }

?>
                 
            
        </body>
</html>