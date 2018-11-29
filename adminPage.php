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
header("Location: homepage.php");
}else{
//display error if no record exists
echo "Error : Invalid Login Credentials";
}
}
?>

<html>
<body>
<head>
<title> Admin's Login Page - Jetobri </title>
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
		background-image: url(background.jpg); background-repeat: repeat; width: 1000px; height: 1375px;
}
</style>
<body>
<div class="content">
<form action="adminPage.php" method="POST">
<div align = "center">
<h1>Administrator Login</h1>
</form>

<br/><br/>
<body bgcolor = "#800000">
  
      <div align = "center">
         <div style = "width:300px; border: solid 1px #FFFAF0; " align = "left">
            <div style = "background-color:#7AC5CD; color:#FFFAF0; padding:3px;"><b>Login</b></div>
        
            <div style = "margin:30px">
               
               <form action = "" method = "POST">
        <label style = "color:#8C8C8C; padding:3px;"><strong>Username  :</strong></label><input type = "text" name = "user" class = "box"/><br /><br />
                  <label style = "color:#8C8C8C; padding:3px;"><strong>Password  :</strong></label><input type = "password" name = "pass" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><a href="login.php"></a><br /> <br/>
                  <h4><class="a"><a href="usersPage.php"> Log in as user </a></h4> 
                   <h4><class="a"><a href="vendorPage.php"> Log in as vendor </a></h4> 
               </form>
            </div>
         </div>
      </div>
   </body>
</html>
</body>
</html>