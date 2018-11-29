<?php
//our included config file
include "config.php";
//starting our session to preserve our login
session_start();
//check whether data with the session name username has already been created
//if so redirect to homepage
if (isset($_SESSION['username'])) {
//redirecting if there is already a session with the name username
/* header("Location: vendorsAccount.php"); */
}
//check whether data with the name username has been submitted
if (isset($_POST['username'])) {
//variables to hold our submitted data with post
$username = $_POST['username'];
$password = md5($_POST['password']);
//our sql statement that we will execute
$sql = "SELECT * FROM vendor WHERE username='$username' AND password='$password'";
//Executing the sql query with the connection
$re = mysqli_query($con, $sql);
//check to see if there is any record / row in the database
//if there is then the user exists
if (mysqli_num_rows($re)) {
//echo "Welcome";
//creating a session name with username ad inserting the submitted username
$_SESSION['username'] = $username;
//redirecting to homepage
header("Location: vendorsAccount.php");
} else{
//display error if no record exists
echo "Error : Invalid Login Credentials";
}
}
?>

<html>
<body>
<head>
<meta charset="utf-8">
<title> Vendor's Login Page - Jetobri </title>
<h4> Welcome Prospective Vendors! </h4>
<link rel="stylesheet" type="text/css" href="main.css">
<link rel="icon" type ="image/png" href="icon1.png">
<META NAME="Title" CONTENT="">
<META NAME="Keywords" CONTENT="">
<META NAME="Description" CONTENT="">
<meta name="viewport" content="width-device-width, initial-scale=1.0">
<style>
.content {
    max-width: 500px;
    margin: auto;
}

body {  
		background-image: url(htdocs/icon/jetobri/background.jpg); background-repeat: repeat; width: 1000px; height: 1375px;
}
</style>
<body>
<div class="content">
<form action="vendorPage.php" method="post">
<div align = "center">
<h1>Vendor Login</h1>
</form>

<br/><br/>
<body bgcolor = "#800000">
  
      <div align = "center">
         <div style = "width:300px; border: solid 1px #FFFAF0; " align = "left">
            <div style = "background-color:#7AC5CD; color:#FFFAF0; padding:3px;"><b>Login</b></div>
        
            <div style = "margin:30px">
               
               <form action = "" method = "post">
        <label style = "color:#8C8C8C; padding:3px;"><strong>Username  :</strong></label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label style = "color:#8C8C8C; padding:3px;"><strong>Password  :</strong></label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><a href="vendorsAccount.php"></a><br /> <br/>
                  <h3> Don't have an account? Sign up for free <class="a"><a href="signup_vendor.php"> here.</a></h3> 
                  <h4><class="a"><a href="usersPage.php"> Log in as user </a></h4> 
                   <h4><class="a"><a href="adminPage.php"> Log in as admin </a></h4> 
               </form>
            </div>
         </div>
      </div>
   </body>
</html>
</body>
</html>