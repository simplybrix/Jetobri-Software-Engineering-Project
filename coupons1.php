<!DOCTYPE html>
<html>
<title>Coupons - Jetobri</title>
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
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">COU<span class="w3-hide-small">PONS</span>
  </div>
</div>


<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64" id="portfolio">
  <h3 class="w3-center"> NEW COUPONS</h3>
  <p class="w3-center"><em>The following coupons are are available on this website: </em></p><br>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: Arial;
}

.coupon {
    border: 5px dotted #bbb;
    width: 80%;
    border-radius: 15px;
    margin: 0 auto;
    max-width: 600px;
}

.container {
    padding: 2px 16px;
    background-color: #f1f1f1;
}

.promo {
    background: #ccc;
    padding: 3px;
}

.expire {
    color: red;
}
</style>
</head>
<body>

<div class="coupon">
  <div class="container">
    <h3>Taco King</h3>
  </div>
  <div class="container" style="background-color:white">
    <h2><b>20% OFF YOUR PURCHASE</b></h2> 
    <p>Valid online and in-store at select franchises.</p>
  </div>
  <div class="container">
    <p>Use Promo Code: <span class="promo">TKOH20</span></p>
    <p class="expire">Expires: May 15, 2018</p>
  </div>
</div>

<div class="coupon">
 <div class="container">
     <h3>Tirami-Sue</h3>
  </div>
  <div class="container" style="background-color:white">
    <h2><b>$10 OFF YOUR FIRST PURCHASE</b></h2> 
    <p>Valid online and in-store at select franchises.</p>
  </div>
  <div class="container">
    <p>Use Promo Code: <span class="promo">SUET10</span></p>
    <p class="expire">Expires: May 7, 2018</p></div>
</div>

<div class="coupon">
  <div class="container">
    <h3>Tirami-Sue</h3>
  </div>
  <div class="container" style="background-color:white">
    <h2><b>STUDENT DISCOUNT</b></h2> 
    <p>Get up to 45% off with a valid student I.D. Valid in-store only.</p>
  </div>
  <div class="container">
    <p>Use Promo Code: <span class="promo">STUDENTD</span></p>
    <p class="expire">Expires: Jan 03, 2019</p> </div>
    </div>

<div class="coupon">
  <div class="container">
    <h3>Taco King</h3>
  </div>
  <div class="container" style="background-color:white">
    <h2><b>STUDENT DISCOUNT</b></h2> 
    <p>Get up to 20% off with a valid student I.D. Valid in-store only.</p>
  </div>
  <div class="container">
    <p class="expire">Expires: Jan 03, 2019</p></div>
    </div>
<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <h2><a href = "logout.php">Sign Out</a></h2>
  </div>
  <p>Jetobri Inc.</p>
</footer>
</body>
</div>
</span>
</div>
</div>
</html>