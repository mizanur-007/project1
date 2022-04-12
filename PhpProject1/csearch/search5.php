

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Webpage Design</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/footer.css">
    <link rel="stylesheet" href="../CSS/card.css">
    <style>
    table, th, td {
  border: 2px solid white;
  border-collapse: collapse;
  font-family: sans-serif;
  font-size: 70px;
  background-color: black;
}

tr:nth-child(even) {
  background-color: rgba(150, 212, 212, 0.4);
}

th:nth-child(even),td:nth-child(even) {
  background-color: rgba(150, 212, 212, 0.4);
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
                <li><a href="../login.html">HOME</a></li>
                <li><a href="../about.php">ABOUT</a></li>
                <li><a href="../service.php">SERVICE</a></li>
                <li><a href="../design.php">DESIGN</a></li>
                <li><a href="../contact.php">CONTACT</a></li>
            </ul>
        </div>

        <div class="search">
            <input class="srch" type="search" name="" placeholder="Type To text">
            <a href="#"> <button class="btn">Search</button></a>
        </div>

    </div> 
    <div class="content">
        <div class="container">
            <center>
                <?php
 $con= mysqli_connect('localhost', 'root',  '');
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
 else {
    mysqli_select_db($con, 'store');
    if (!mysqli_select_db($con, 'store')){
                echo 'Database is not selected';
            }
}
$form_id= filter_input(INPUT_POST, 'c05');
$sql = "SELECT * FROM cat WHERE c_id='$form_id' ";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    echo '<table style="width:80%; height:100px">';
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>Cat ID</td><td>Cat Name</td><td>Cat Price</td><td>Cat Food</td></tr><tr><td>" . $row["c_id"]. "</td><td> " . $row["c_name"]. "</td><td>" . $row["c_price"]. "</td><td>" .$row["c_food"]."</td></tr><br>";
  }
  echo '</table>';
} else {
  echo "0 results";
}

mysqli_close($con);
?> 
            </center>
          </div>
    </div>
  </div>
  <footer class="footer-distributed">

    <div class="footer-left">

        <h3>Daffodil<span>Pet</span>Store</h3>

        <p class="footer-links">
            <a href="../login.html" class="link-1">Home</a>
        
            <a href="../service.php">Pricing</a>
        
            <a href="../about.php">About</a>
            
            <a href="../faq.php">Faq</a>
            
            <a href="../contact.php">Contact</a>
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