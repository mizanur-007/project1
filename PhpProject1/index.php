<?php

//$host="localhost";
//$user="root";
//$password = "";
//$database = "store";
 $con= mysqli_connect("localhost", "root", "");
 mysqli_select_db($con, "store");
 
 if(isset($_POST['login'])){
     $uemail=$_POST['email'];
     $upassword=$_POST['password'];
     
     $sql= mysqli_query($con, "select * from customer where c_email='$uemail' AND c_password='$upassword'");
     
     $rows= mysqli_num_rows($sql);
     if ($rows == 1){
         header("location: dog.php");
     }
     else{
         echo 'Invalid';
     }
     mysqli_close($con);
 }
?>