<?php
$host="127.0.0.1";
$user="root";
$password="123456";
 $database="admin";
$connct= mysqli_connect($host, $user, $password, $database);
        if(mysqli_connect_errno()){
         die("con not");   
        }else{
            echo "yes";
        }
       
?>
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
        // put your code here
        ?>
    </body>
</html>
