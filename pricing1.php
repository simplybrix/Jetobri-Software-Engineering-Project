<!DOCTYPE html>
<html>
<title>Pricing - Jetobri</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url("background.jpg");
    min-height: 100%;
}

/* Second image (Portfolio) */
.bgimg-2 {
    background-image: url("background.jpg");
    min-height: 400px;
}

/* Third image (Contact) */
.bgimg-3 {
    background-image: url("background.jpg");
    min-height: 400px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i></a>
    <a href="homepage1.php" class="w3-bar-item w3-button w3-hide-small"> HOME</a>
    <a href="aboutPage1.php" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> ABOUT</a>
    <a href="ItemCategoryPage1.php" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> ITEM CATEGORIES</a>
    <a href="vendorListPage1.php" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> VENDORS LIST</a>
    <a href="pricing1.php" class="w3-bar-item w3-button w3-hide-small"><i class=" fa fa-credit-card-alt"></i> PRICES</a>
    <a href="coupons1.php" class="w3-bar-item w3-button w3-hide-small"><i class=" fa fa-money"></i> COUPONS</a>
    <a href="vendorsAccount.php" class="w3-bar-item w3-button w3-hide-small"><i class= "fa fa-home"></i> MY ACCOUNT</a>
    <a href="search1.php" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-search"></i> SEARCH</a>
  </div>
</div>
  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="homepage1.php" class="w3-bar-item w3-button" onclick="toggleFunction()"> HOME</a>
    <a href="aboutPage1.php" class="w3-bar-item w3-button" onclick="toggleFunction()"> ABOUT</a>
    <a href="ItemCategoryPage1.php" class="w3-bar-item w3-button" onclick="toggleFunction()"> ITEM CATEGORIES</a>
    <a href="vendorListPage1.php" class="w3-bar-item w3-button" onclick="toggleFunction()"> VENDORS LIST</a>
    <a href="pricing1.php" class="w3-bar-item w3-button" onclick="toggleFunction()"> PRICES</a>
    <a href="coupons1.php" class="w3-bar-item w3-button" onclick="toggleFunction()"> COUPONS</a>
    <a href="vendorsAccount.php" class="w3-bar-item w3-button" onclick="toggleFunction()"> MY ACCOUNT</a>
    <a href="search1.php" class="w3-bar-item w3-button" onclick="toggleFunction()"> SEARCH</i></a>
  </div>
</div>
<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">PRIC<span class="w3-hide-small">ING</span>
  </div>
</div>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<div class="content">
<link rel="stylesheet" type="text/css" href="main.css">
<link rel="icon" type ="image/png" href="icon.png">
<style>
* {
    box-sizing: border-box;
}

.columns {
    float: left;
    width: 49%;
    padding: 8px;
}

.price {
    list-style-type: none;
    border: 1px solid #eee;
    margin: 0;
    padding: 0;
    -webkit-transition: 0.3s;
    transition: 0.3s;
}

.price:hover {
    box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
}

.price .header {
    background-color: #111;
    color: white;
    font-size: 25px;
}

.price li {
    border-bottom: 1px solid #eee;
    padding: 20px;
    text-align: center;
}

.price .grey {
    background-color: #eee;
    font-size: 20px;
}

.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    font-size: 18px;
}

@media only screen and (max-width: 600px) {
    .columns {
        width: 100%;
    }
}
</div>
</style>
</head>
<body>

<h2 style="text-align:center">Jetobri's Monthly Pricing</h2>

<div class="columns">
  <ul class="price">
    <li class="header">The Free Trial </li>
    <li class="grey"> Free </li>
    <li>Standard Shipping</li>
    <li>Unlimited Vendor Access</li>
    <li>24/7 Customer Support</li>
    <li class="grey"><a href="signup.php" class="button">Sign Up</a></li>
  </ul>
</div> </div>

<div class="columns">
  <ul class="price">
    <li class="header" style="background-color:#4CAF50">Adobansudo Package</li>
    <li class="grey">$ 10.00 / Month</li>
    <li>2-Day Free Shipping</li>
    <li>Unlimited Vendor Access</li>
    <li>24/7 Customer Support</li>
    <li class="grey"><a href="signup.php" class="button">Sign Up</a></li>
  </ul>
  <h4><class="a"><a href="homepage1.php"> Return to Homepage </a></h4> 
  <h4><class="a"><a href="logout.php"> Log Out </a></h4> 
  </div>
</footer>
</div>
</body>
</html>