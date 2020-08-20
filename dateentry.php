<?php

session_start();
if(!isset($_SESSION['fname']))
{
    echo "you are logged out";
    header('location:index.php');
}
?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!--

Template 2093 Flight

http://www.tooplate.com/view/2093-flight

-->
    	<title>Find Your Available agents</title>
    
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/datepicker.css">
        <link rel="stylesheet" href="css/tooplate-style.css">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    
    <!------------------------------------------------------------------------->
        <style type="text/css">
        *{
            margin:0;
        }
        body{
            background:url(img/suite-03.jpg);
            background-size: cover;
            height: 100vh;
            background-position: left;
            
        }
    /*  */
	body {font-family: 'Raleway', sans-serif;}
	.thin {font-weight:100;font-family: 'Raleway', sans-serif;}
	h1 { font-size:44px; font-weight:200;font-family: 'Raleway', sans-serif;}
	h2 {font-size:33px; font-weight:300;font-family: 'Raleway', sans-serif;}
	h3 {font-size:22px; font-weight:700;font-family: 'Raleway', sans-serif;}
	h4, h5 {font-weight:800;font-family: 'Raleway', sans-serif;}
	.bold, strong  {font-weight:600;font-family: 'Raleway', sans-serif;}
	.extrabold {font-weight:800;font-family: 'Raleway', sans-serif;}
	.ultrabold {font-weight:900;font-family: 'Raleway', sans-serif;}
        
        .header{
        width: 100%;
        background-color: rgba(0,0,0,0.2);
        }
        .header ul{
            text-align: center;
        }
        .header ul li{
            list-style: none;
            display: inline-block;
        }
        
        .header ul li a{
            display: block;
            text-decoration:none;
            text-transform: uppercase;
            color:#fff;
            font-size: 15px;
            font-family: 'Raleway',sans-serif;
            letter-spacing: 2px;
            font-weight: 600;
            padding: 25px;
            transition: all ease 0.5s;
        }
        .header ul li a:hover{
            background-color: #211b4385;
        }
        
   


/* The popup form - hidden by default */

    </style>
    
</head>

<body>

    
    <section class="banner" id="top">
        
        <div class="container">
                <div class="header">
        <ul>
        <li><a href="logout.php">Log out</a></li>
        </ul>
        
        </div>

            <div class="row">
                <div class="col-md-5">
                    <div class="left-side">
                        <div class="logo">
                            <img src="img/agent.png" alt="Agent Tepmlate" style="width: 200px">
                        </div>
                        <div class="tabs-content">
                            <h4> Welcome <?php echo $_SESSION['fname']; ?>,Enter the details of your Availability  </h4>
                            <ul class="social-links">
                                <li><a href="http://facebook.com">Find us on <em>Facebook</em><i class="fa fa-facebook"></i></a></li>
                                <li><a href="http://youtube.com">Our <em>YouTube</em> Channel<i class="fa fa-youtube"></i></a></li>
                                <li><a href="http://instagram.com">Follow our <em>instagram</em><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="page-direction-button">
                            <a href="contact.html"><i class="fa fa-phone"></i>Contact Us Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-1">
                    <section id="first-tab-group" class="tabgroup">
                        <div id="tab1">
                            <div class="submit-form">
                                <h4>Enter your <em>availaability ,<?php echo $_SESSION['fname']; ?></em>:</h4>
                                <form id="form-submit" action="availability.php" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        
                                        
                                        <div class="col-md-6">
                                            <fieldset>
                                                <label for="departure">Start date:</label>
                                                <input name="startdate" type="date" class="form-control date" id="deparure" placeholder="Select date..." required="" onchange='this.form.()'>
                                            </fieldset>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <fieldset>
                                                <label for="return">End date:</label>
                                                <input name="enddate" type="date" class="form-control date" id="return" placeholder="Select date..." required="" onchange='this.form.()'>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset>
                                                <label for="return">Agent Name</label>
                                                <input name="name" type="text" class="form-control date" id="return" placeholder="Enter Name" required="" onchange='this.form.()'>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset>
                                                <label for="image">Upload Image</label>
                                                <input name="image" type="file" class="form-control date" id="deparure" placeholder="Select date..." required="" onchange='this.form.()'>
                                            </fieldset>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <fieldset>
                                                <button type="submit" id="form-submit" class="btn" name="submit">Enter Your Availability</button>
                                            </fieldset>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>