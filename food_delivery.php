<!DOCTYPE html>
<html>
<title> Food Delivery - Jetobri</title>
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
    <a href="homepage.php" class="w3-bar-item w3-button w3-hide-small"> HOME</a>
    <a href="aboutPage.php" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> ABOUT</a>
    <a href="ItemCategoryPage.php" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> ITEM CATEGORIES</a>
    <a href="vendorListPage.php" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> VENDORS LIST</a>
    <a href="pricing.php" class="w3-bar-item w3-button w3-hide-small"><i class=" fa fa-credit-card-alt"></i> PRICES</a>
    <a href="coupons.php" class="w3-bar-item w3-button w3-hide-small"><i class=" fa fa-money"></i> COUPONS</a>
    <a href="cart.php" class="w3-bar-item w3-button w3-hide-small"><i class= "fa fa-shopping-cart"></i> CART</a>
    <a href="search.php" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-search"></i> SEARCH</a>
  </div>
</div>
  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="homepage.php" class="w3-bar-item w3-button" onclick="toggleFunction()"> HOME</a>
    <a href="aboutPage.php" class="w3-bar-item w3-button" onclick="toggleFunction()"> ABOUT</a>
    <a href="ItemCategoryPage.php" class="w3-bar-item w3-button" onclick="toggleFunction()"> ITEM CATEGORIES</a>
    <a href="vendorListPage.php" class="w3-bar-item w3-button" onclick="toggleFunction()"> VENDORS LIST</a>
    <a href="pricing.php" class="w3-bar-item w3-button" onclick="toggleFunction()"> PRICES</a>
    <a href="coupons.php" class="w3-bar-item w3-button" onclick="toggleFunction()"> COUPONS</a>
    <a href="cart.php" class="w3-bar-item w3-button" onclick="toggleFunction()"> CART</a>
    <a href="search.php" class="w3-bar-item w3-button" onclick="toggleFunction()"> SEARCH</i></a>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">FOOD <span class="w3-hide-small">DELIVERY</span>
  </div>
</div>
<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64" id="portfolio">
  <h3 class="w3-center"> Welcome to the Food Delivery Page!</h3>
<div class="w3-content w3-container w3-padding-64" id="portfolio">
  <p class="w3-center"> Below are the avaliable options for food delivery: </p>
<div class="w3-row-padding w3-left">
    <div class="w3-col m3">
      <img src="1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"> 
      <p class="w3-center"><a href="food_tKing.php">Taco King</a></p><br>
    </div>