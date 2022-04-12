<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
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
                
                $form_name= filter_input(INPUT_POST, 'cname');
                $form_email= filter_input(INPUT_POST, 'email');
                $form_password= filter_input(INPUT_POST, 'password');
                $sql="insert into customer(c_name, c_email, c_password)
VALUES('$form_name','$form_email','$form_password')";
                if(!mysqli_query($con, $sql)){
                    echo 'Not inserted/saved';
                }
                else{
                    header("location: cat.php");
                }
            }
        }
        ?>
    </body>
</html>