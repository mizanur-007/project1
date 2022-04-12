<!DOCTYPE html>
<html lang="en">
<head>
    <title>Webpage Design</title>
    <link rel="stylesheet" href="CSS/style2.css">
    <link rel="stylesheet" href="CSS/footer.css">
    <link rel="stylesheet" href="CSS/product.css">
    <style> 
input[type=submit], input[type=submit], input[type=reset] {
  background-color: #fcd5ce;
  border: none;
  color: white;
  padding: 25px 75px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
</head>

<body>
  <div class="main">

  <div class="navbar">
      <div class="icon">
        <h2 class="logo">DPS</h2>
    </div>

    <div class="menu">
      <ul>
          <li><a href="login.html">HOME</a></li>
          <li><a href="about.php">ABOUT</a></li>
          <li><a href="service.php">SERVICE</a></li>
          <li><a href="design.php">DESIGN</a></li>
          <li><a href="contact.php">CONTACT</a></li>
      </ul>
  </div>

  <div class="search">
    <input class="srch" type="search" name="" placeholder="Type To text">
    <a href="#"> <button class="btn">Search</button></a>
  </div>
</div>

<div class="content">
  <body>
    <div id="wrap">
    <div id="columns" class="columns_3">
    <figure>
    <img src="Photos/d1.jpg">
    <figcaption>DOG-1</figcaption>
      <span class="price">৳4400</span>
      <form action="search/search.php" method="POST">
      <input type="hidden" id="d01" name="d01" value="d01">
      <a class="button" href=""><input type="submit" id="buy" value="Buy" class="button" /></a>
      </form>
    </figure>
    
    <figure>
    <img src="Photos/d2.jpg">
    <figcaption>Green and Black Flowers</figcaption>
      <span class="price">$44</span>
      <form action="search/search2.php" method="POST">
      <input type="hidden" id="d02" name="d02" value="d02">
      <a class="button" href=""><input type="submit" id="buy1" value="Buy" class="button" /></a>
      </form>
    </figure>
    
    <figure>
    <img src="Photos/d3.jpg">
    <figcaption>Black Dots</figcaption>
      <span class="price">$44</span>
      <form action="search/search3.php" method="POST">
      <input type="hidden" id="d03" name="d03" value="d03">
      <a class="button" href=""><input type="submit" id="buy" value="Buy" class="button" /></a>
      </form>
    </figure>
    
    <figure>
    <img src="Photos/d4.jpg">
    <figcaption>Red Flowy</figcaption>
      <span class="price">$44</span>
      <form action="search/search4.php" method="POST">
      <input type="hidden" id="d04" name="d04" value="d04">
      <a class="button" href=""><input type="submit" id="buy" value="Buy" class="button" /></a>
      </form>
    </figure>
    
     <figure>
     <img src="Photos/d5.jpg">
    <figcaption>Yellow Button-Up</figcaption>
      <span class="price">$44</span>
      <form action="search/search5.php" method="POST">
      <input type="hidden" id="d05" name="d05" value="d05">
      <a class="button" href=""><input type="submit" id="buy" value="Buy" class="button" /></a>
      </form>
    </figure>
    
     <figure>
     <img src="Photos/d6.jpg">
    <figcaption>Put a Bird On It</figcaption>
       <span class="price">$44</span>
       <form action="search/search6.php" method="POST">
      <input type="hidden" id="d06" name="d06" value="d06">
      <a class="button" href=""><input type="submit" id="buy" value="Buy" class="button" /></a>
      </form>
    </figure>
    
    <figure>
    <img src="Photos/d7.jpg">
    <figcaption>Polka Dots</figcaption>
      <span class="price">$44</span>
      <form action="search/search7.php" method="POST">
      <input type="hidden" id="d07" name="d07" value="d07">
      <a class="button" href=""><input type="submit" id="buy" value="Buy" class="button" /></a>
      </form>
    </figure>	
    
     <figure>
    <img src="Photos/d8.jpg">
    <figcaption>Blue Spots</figcaption>
       <span class="price">$44</span>
       <form action="search/search8.php" method="POST">
      <input type="hidden" id="d08" name="d08" value="d08">
      <a class="button" href=""><input type="submit" id="buy" value="Buy" class="button" /></a>
      </form>
    </figure>
    
      <figure>
    <img src="Photos/d9.jpg">
      <figcaption>Pink Dots</figcaption>
        <span class="price">$44</span>
       <form action="search/search9.php" method="POST">
      <input type="hidden" id="d09" name="d09" value="d09">
      <a class="button" href=""><input type="submit" id="buy" value="Buy" class="button" /></a>
      </form>
    </figure>	
  </div>
</div>

</div>
<footer class="footer-distributed">

  <div class="footer-left">

      <h3>Daffodil<span>Pet</span>Store</h3>

      <p class="footer-links">
          <a href="login.html" class="link-1">Home</a>
      
          <a href="service.php">Pricing</a>
      
          <a href="about.php">About</a>
          
          <a href="faq.php">Faq</a>
          
          <a href="contact.php">Contact</a>
      </p>

      <p class="footer-company-name">Daffodil Pet Store © 2022</p>
  </div>

  <div class="footer-center">

      <div>
          <i class="fa fa-map-marker"></i>
          <p><span>Daffodil International University</span> Ashulia, Savar</p>
      </div>

      <div>
          <i class="fa fa-phone"></i>
          <p>+8801996854730</p>
      </div>

      <div>
          <i class="fa fa-envelope"></i>
          <p><a href="nafis15-2675@diu.edu.bd">support@store.com</a></p>
      </div>

  </div>

  <div class="footer-right">

      <p class="footer-company-about">
          <span>About the company</span>
          We are a 3 man developer team trying to creat our own website.
           Our site is based on<br> pet based store, it is a simple project based on HTML 
           CSS PHP and JS</p>
      </p>

      <div class="footer-icons">
          <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
          <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
          <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
          <a href="#"><ion-icon name="logo-google"></ion-icon></a>
          <a href="#"><ion-icon name="logo-skype"></ion-icon></a>
      </div>

  </div>

</footer>
  <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>