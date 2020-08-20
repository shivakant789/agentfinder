<html>
    <head>
    <title>demo</title>
    <link rel="stylesheet" href="form.css" type="text/css">
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
    <div class="header">
        <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="login.php">Login as Customer</a></li>
        <li><a href="Registration.php">Register as Customer</a></li>
        <li><a href="Agentlogin.php">Login as Agent</a></li>
        <li><a href="Agentregistrationfronend.php">Register as Agent</a></li>
        </ul>
        
        </div>



     <div class="container">
      <div class="login-box">  
<form action="register.php" method="post">

<h1>Register Here,As a Customer</h1>    
<p>Please Fill in the details to create account with us</p>
<hr>
<label for="lname"><b>Enter First Name</b></label>
    <input type="text" placeholder="enter your First  name" name="fname">
<label for="lname"><b>Enter Last Name</b></label>
    <input type="text" placeholder="enter your  last name" name="lname">
<label for="email"><b>Enter your email</b></label>
    <input type="text" placeholder="enter your email" name="email" required>
    
<label for="gender">Gender</label>
<label for="male" class="radio-inline"><input type="radio" name="gender" value="m" id="male">male</label>
<label for="male" class="radio-inline"><input type="radio" name="gender" value="f" id="female">female</label>
<label for="male" class="radio-inline"><input type="radio" name="gender" value="o" id="Others">Others</label><br>
<label for="pwd"><b>Password</b></label>
<input type="password" placeholder="Enter Password" name="password">
<label for="confirm"><b>Confirm Password</b></label>
<input type="password" placeholder="Confirm Password" name="confirm">
<hr>
    <p> by Creating Account you are agreet<a href="">Terms & condition</a></p>
<button type="submit" class="registerbtn" name="submit"><strong>Register</strong></button>
    
          </form>
         <button type="submit" class="login" name="Loginhere" onclick="location.href ='login.php'"><strong>Login Here</strong></button> 
         </div>
    </div>
    

   
	
    </body>
    </html>