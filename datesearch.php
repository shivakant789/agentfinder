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
        <div class="container">
            <h1 class="text-center text-white bg-dark">Available Agents Profile</h1>
            <br>
            <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover text-center" border="1px" align="center">
                <thead class="bg-dark text-white">
                <th>ID</th>
                <th>Start date</th>    
                <th>End Date</th>
                <th>Agent Name</th>
                <th>Agent Pic</th>
                </thead>
                <tbody>
<?php 
$conn = mysqli_connect("localhost","root","","phpdb");
 
if(!$conn){
	die("Connection error: " . mysqli_connect_error());	
}

if(isset($_POST['submit'])){
    $startdate =$_POST['startdate'];
    $enddate =$_POST['enddate'];
     
        $displayquery = $sql = "select * from `imageinsert` where '$startdate'  BETWEEN startdate and enddate and  '$enddate'  BETWEEN startdate and enddate"; 
        $querydisplay = mysqli_query($conn,$displayquery );
        
        while( $result = mysqli_fetch_array($querydisplay)){
            ?>
            <tr>
                <td><?php echo $result['id']; ?></td>
                <td><?php echo $result['startdate']; ?></td>
                <td><?php echo $result['enddate']; ?></td>
                <td><?php echo $result['name']; ?></td>
                <td><img src=" <?php echo $result['image']; ?>" height="100px" width="100px"></td>        
            </tr>
          <?php  
        }
            
    
}
?></tbody>
                </table>  
            </div>
            </div>
        </body>
</html>