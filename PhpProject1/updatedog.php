<?php
        $con= mysqli_connect('localhost', 'root',  '');
        if (!$con){
            echo 'Not connected to server ';
        }
        else{
            mysqli_select_db($con, 'store');
            if (!mysqli_select_db($con, 'store')){
                echo 'Database is not selected';
            }
            else{
                $form_id= filter_input(INPUT_POST, 'id');
                $form_name= filter_input(INPUT_POST, 'name');
                $form_price= filter_input(INPUT_POST, 'price');
                $form_food= filter_input(INPUT_POST, 'food');
                
                if ($form_id != null) {
                $sql="UPDATE dog SET d_name='$form_name' WHERE d_id='$form_id' ";
                             
                           if(!mysqli_query($con, $sql)){
                    echo '';
                }
                else{
                    echo '';
                }
                
                $sql1="UPDATE dog SET d_price='$form_price' WHERE d_id='$form_id' ";
                
                if(!mysqli_query($con, $sql1)){
                    echo '';
                }
                else{
                    echo '';
                }
                
                $sql2="UPDATE dog SET d_food='$form_food' WHERE d_id='$form_id' ";
                
                if(!mysqli_query($con, $sql2)){
                    echo 'Not inserted/saved';
                }
                else{
                    echo 'Inserted/saved succuesfully';
                }
                
                }
            }
        }
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Webpage Design</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/footer.css">
    <link rel="stylesheet" href="CSS/card.css">
    <script type="text/javascript">
        function uvalidation(){
           var dname= document.forms["updateform"]["name"].value;
           var did = document.forms["updateform"]["id"].value;
           var dfood = document.forms["updateform"]["food"].value;
         
           var dprice = document.forms["updateform"]["price"].value;
           
           var dupdate = document.forms["updateform"]["update"].value;
         
            if(did == '' ){
                alert("Please Enter id");
                return false;
            }
            if(dname == '' ){
                alert("Please Enter name");
                return false;
            }
            if(dprice == '' ){
                alert("Please Enter price");
                return false;
            }
            if(dfood == '' ){
                alert("Please Enter food");
                return false;
            }
        }
            </script>
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
        <div class="container">
            <center>
                <div class="formup">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" style="height:50px;width:50px;" id="updateform">
    <table style="background-color: black; height: 200px; width: 200px">
        <tr>
            <td><h2>ID</h2></td>
            <td><input type="text" name="id" id="id" value="" style="background-color: black" /></td> 
        </tr>
        <tr>
            <td><h2>Name</h2></td>
            <td><input type="text" name="name" id="name" style="background-color: black" /></td>
        </tr>
        <tr>
            <td><h2>Price</h2></td>
            <td><input type="text" name="price" id="price" style="background-color: black" /></td>
        </tr>
        <tr>
            <td><h2>Food</h2></td>
            <td><input type="text" name="food" id="food" style="background-color: black" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" id="update" onclick="uvalidation()" value="Update" style="background-color: black" /><br/></td>
    </tr>
    </table>
</form>
                </div>
            </center>
            <div></div><div>
                  <div>
                      <h2><b><a href="updatecat.php">Cat</a></b></h2>
        </div>
            </div>
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