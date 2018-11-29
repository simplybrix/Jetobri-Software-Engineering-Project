<?php
//our included config file
include "config.php";
//starting our session to preserve our login
session_start();
//check whether data with the session name username has already been created
//if so redirect to hhomepage
if (isset($_SESSION['username'])) {
//redirecting if there is already a session with the name username
header("Location: homepage.php");
}
//check whether data with the name username has been submitted
if (isset($_POST['username'])) {
//variables to hold our submitted data with post
$username = $_POST['username'];
$pass = md5($_POST['password']);
//our sql statement that we will execute
$sql = "SELECT * FROM user WHERE username='$username' AND password='$pass'";
//Executing the sql query with the connection
$re = mysqli_query($con, $sql);
//check to see if there is any record / row in the database
//if there is then the user exists
if (mysqli_num_rows($re)) {
//echo "Welcome";
//creating a session name with username ad inserting the submitted username
$_SESSION['username'] = $username;
//redirecting to homepage
echo "You've Successfully Logged Out."
}else{
//display error if no record exists
echo "Error : Invalid Login Credentials";
}
}
?>

<html>
<head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <meta charset="utf-8"/>
      <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <title>User Login - Jetobri</title>
      <meta content="" name="keywords"/>
      <meta content="" name="description"/>
        <link rel="shortcut icon" href="file:///C:/xampp/htdocs/icon/jetobri/icon1.png"/>
        <link rel="apple-touch-icon" href="file:///C:/xampp/htdocs/icon/jetobri/icon1.png"/>
<body>
<div class="content">
<style>
  body {  
     background-image: url(file:///C:/xampp/htdocs/icon/jetobri/background.jpg); background-attachment: fixed; background-position: center; background-repeat: no-repeat;background-size:cover ; width: 1000px; height: 1000px;
  }
</style>
<form action="usersPage.php" method="post">
<header>
	<div align = "left">
		<div style = "font-size:12px; color:#000000; padding:12px;"><strong><h1> You've Successfully Logged Out. </h1></strong></div></div>
  <div align = "center">
  <div style = "font-size:18px; color:#000000; padding:26px;"><strong><h1> Welcome to Jetobri! </h1></strong></div>
  <div style = "font-size:16px; color:#000000; margin-top:11px">
        <h2> Want to know our prices? Click <class="a"><a href="pricing.html"> here.</a></h2> 
        </div>
  </header>

 <body bgcolor = "#000000">
    <section>
    <article class="col1"></article>
    </section>
    </div>
   
   <head>
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         
         .box {
            border:#666666 solid 1px;
         }
      </style>
   </head></div></body></head>
  <body bgcolor = "#000000">
  
      <div align = "center">
         <div style = "width:300px; border: solid 1px #FFFAF0; " align = "left">
            <div style = "background-color:#7AC5CD; color:#FFFAF0; padding:3px;"><b>Login</b></div>
        
            <div style = "margin:30px">
               
               <form action = "" method = "post">
        <label style = "color:#8C8C8C; padding:3px;">Username: </label> 
        <input type = "text" name = "username" class = "box"/><br /><br />
                  <label style = "color:#8C8C8C; padding:3px;">Password: </label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><a href="homepage.php"></a><br /> <br/>
               </form>
            </div>
         </div>
      </div>
   </body>
</html>
</form>

<br/><br/>
</form>
<div id="wrapper">
    <nav class="menu">
    <div align = "center">
      <ul>
      <div style = "font-size:14px; color:#FFFAF0; margin-top:11px">
        <h3> Don't have an account? Sign up for free <class="a"><a href="signup.php"> here.</a></h3> 
        <h4><class="a"><a href="adminPage.php"> Log in as Admin </a></h4> 
        <h4><class="a"><a href="vendorPage.php"> Log in as Vendor </a></h4> 
        </div>
      </ul>
    </nav>
  </div>
<br/>
</body>
</html>