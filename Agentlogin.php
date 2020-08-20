<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 20%;
  border-radius: 50%;
}

.container {
  padding: 16px;
    background-color: white;
}

span.password {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.password {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
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
        
    
    
</style>
    
    </head>
<body>
    <div class="header">
        <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="login.php">Login as Customer</a></li>
        <li><a href="Registration.php">Register as Customer</a></li>
        <li><a href="Agentlogin.php">Login as Agent</a></li>
        <li><a href="Agentregistrationfronend.php">Register as Agent</a></li>
        </ul>
        
        </div>
  
    
    
    
 
<h2>Login for Agents</h2>

<form action="agentverify.php" method="post">
  <div class="imgcontainer">
    <img src="avtar-man.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Username" name="email" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit" name="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn" onclick="location.href='Registration.php'" >Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
    
</body>



</html>