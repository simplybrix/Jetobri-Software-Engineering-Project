<?php
//our included config file
include "config.php";
//check whether data with the name usename has been submitted
if (isset($_POST['username'])) {
//variables to hold our submitted data with post
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$ccNum = $_POST['ccNum'];
$cvCode = $_POST['cvCode'];
$expDate = $_POST['expDate'];
$ccName = $_POST['ccName'];
$esign = $_POST['esign'];

//our sql statement that we will execute
$sql = "INSERT INTO `user` (`id`,`FirstName`, `LastName`, `email`, `username`, `password`, `ccNum`, `cvCode`, `expDate`, `ccName`, `esign`) VALUES (NULL, '$FirstName', '$LastName','$email','$username','$password','$ccNum', '$cvCode', '$expDate', '$ccName', '$esign')";
//Executing the sql query with the connection
$re = mysqli_query($con, $sql);
//Check to see whether request was true or false
if ($re) {
echo "Successfully Registered";
header("Location: usersPage.php");
die();
}else{
echo "An Error Occured";
}
}
?>

<!DOCTYPE html>
<html>
<style>
* {box-sizing: border-box}

/* Full-width input fields */
  input[type=text], input[type=password] {
  width: 100%;
  padding: 10px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
    width: 100%;
  }
}

.error {color: #FF0000;}
</style>
<body>

<h2>Sign Up</h2>
<p>Please fill in this form to create an account.</p>
<form method="POST">
<form action="usersPage.php" style="border:1px solid #ccc">
  <div class="container">
    <label><b>First Name *</b></label>
    <input type="text" name="FirstName" required>
  <label><b>Last Name *</b></label>
    <input type="text" name="LastName" required>
    <label><b>E-mail *</b></label>
    <input type="text" placeholder="i.e., first.name@yahoo.com" name="email" required>
    <label><b>Username *</b></label>
    <input type="text" name="username" required>
    <label><b>Password *</b></label>
    <input type="password" placeholder="at least 8 characters" name="password" required>
  <label><b>Credit Card Number</b></label>
    <input type="text" name="ccNum" not-required>
    <label><b>CV Code</b></label>
    <input type="text" name ="cvCode" not-required>
    <label><b>Expiration Date</b></label>
    <input type="text" placeholder="mm/yy" name="expDate" not-required>
    <label><b>Name on Credit Card</b></label>
    <input type="text" placeholder="i.e., Jane Anne Doe" name="ccName" not-required>
   <label><b>E-Signature *</b></label>
    <input type="text" placeholder="i.e., Jane Doe" name="esign" required>
    <input type="checkbox" not-checked="not-checked" name="remember" style="margin-bottom:15px"> Remember me
   <p>By creating an account you agree to our <a href="terms_and_privacy.html">Terms & Privacy</a>.</p>
    <div class="clearfix">
      <button type="submit" class="signupbtn"><a href="usersPage.php"></a> Submit</button>
      <button type="button" class="cancelbtn"><a href="usersPage.php"></a> Cancel</button>
    </div>
  </div>
</form>
</body>
</html>