<html>
<title>Home - Jetobri</title>
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
</div>


<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">JETO<span class="w3-hide-small">BRI</span>
  </div>
</div>


<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64" id="portfolio">
  <h3 class="w3-center"> NEW CATEGORIES</h3>
  <p class="w3-center"><em>The following catergories are listed on this website: </em></p><br>

  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
  <div class="w3-row-padding w3-center">
    <div class="w3-col m3">
      <img src="1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"> 
      <p class="w3-center"><a href="food_delivery1.php">Food Delivery</a></p><br>
    </div>

    <div class="w3-col m3">
      <img src="2.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"> 
      <p class="w3-center"><a href="grocery_delivery.php">Grocery Delivery</a></p><br>
    </div>

    <div class="w3-col m3">
      <img src="3.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">
      <p class="w3-center"><a href="hair_salon.php">Hair Salon Services</a></p><br>
    </div>

    <div class="w3-col m3">
      <img src="4.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">
      <p class="w3-center"><a href="barbershop.php">Barbershop Services</a></p><br>
    </div>
  </div>

  <div class="w3-row-padding w3-center w3-section">
    <div class="w3-col m3">
      <img src="5.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">
      <p class="w3-center"><a href="automobile_assistance.php">Automobile Related Assistance</a></p><br>
    </div>
</div>

<div class="w3-content w3-container w3-padding-64" id="portfolio">
  <h3 class="w3-center"> NEW VENDORS</h3>
  <p class="w3-center"><em>The following vendors are listed on this website:</em></p><br>

  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
 <div class="w3-row-padding w3-center">
    <div class="w3-col m3">
      <img src="1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"> 
      <p class="w3-center"><a href="my_page.php">Taco King</a></p><br>
    </div>

    <div class="w3-col m3">
      <img src="2.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"> 
      <p class="w3-center"><a href="grocery_world.php">Grocery World</a></p><br>
    </div>

    <div class="w3-col m3">
      <img src="3.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">
      <p class="w3-center"><a href="hair_h2t.php">Head 2 Toe Hair Salon</a></p><br>
    </div>

    <div class="w3-col m3">
      <img src="4.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">
      <p class="w3-center"><a href="barbershop_pat.php">Pat's Barbershop</a></p><br>
    </div>
  </div>

 <div class="w3-row-padding w3-center">
    <div class="w3-col m3">
      <img src="9.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">
      <p class="w3-center"><a href="barbershop_clide.php">Clide's Barbershop</a></p><br>
    </div>
   
    <div class="w3-col m3">
      <img src="7.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"> 
      <p class="w3-center"><a href="hendersonrocs.php">HendersonRocs</a></p><br>
    </div>

    <div class="w3-col m3">
      <img src="8.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">
      <p class="w3-center"><a href="hair_jade.php">Jade's Salon</a></p><br>
    </div>

   <div class="w3-col m3">
      <img src="6.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"> 
      <p class="w3-center"><a href="food_sue.php">Tirami-Sue</a></p><br>
    </div></div>


  <div class="w3-row-padding w3-center w3-section">
    <div class="w3-col m3">
      <img src="10.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">
      <p class="w3-center"><a href="automobile_draya.php">Draya's Auto Repairs</a></p><br>
    </div>

    <div class="w3-col m3">
      <img src="5.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">
      <p class="w3-center"><a href="automobile_pedro.php">Pedro's Repair Shop</a></p><br>
    </div>
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
</script>
</body>
</html>