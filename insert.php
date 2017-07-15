<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
--><?php

$mysqli = new mysqli('127.0.0.1', 'root', 'mar','ho12');

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}
//echo 'Connection OK';

?>
<html>
<head>
  <title>Booking</title>
  <style type="text/css">
    a{
      text-decoration: none;
    }
    a:hover
    {
      color: red;
    }
  </style>
</head>

       
<?php
        if (isset($_POST['submit'])) {
	
$name=$_POST['name'];
$typ=$_POST['op'];
$email=$_POST['email'];

$ti=$_POST['ti'];
$str=$_POST['bday'];
$sql=" insert into inf(name,room_type,email,ti,str)values('" .$name."','". $typ."','" .$email."','" .$ti."','" .$str."');";
        $r= mysqli_query($mysqli, $sql);
        echo "Your booking done successful, Thank you for your booking";
     //header("Location:http://localhost/php_test/show.php");
 
} 
else{
	


 
        $mysqli->close();}
?>
  


<body link="white" vlink="white" background="bg.jpg" >

<div style="width: 80%;margin-right: auto;margin-left: auto;background-color:rgba(255,255,255,0.9);" style="border: 3px solid black">

<table width="100%" style="font-family: arial;margin-right: auto;margin-left: auto;">
  <tr  >
    <td colspan="6" align="center" style="background-color:#007FFF;border: 2px solid black;color: white ">
      <h1 ></h1>
    </td>
  </tr>
  <tr  >
    <td colspan="6" align="center">
    
      
      
    </td>
  </tr>
  <tr align="center"   >
  <td>
    
  </td>
    
      
    </td>
  </tr>
</table>
<h3 style="margin-left: 500px ;margin-top: 10px">BOOking Room</h3>
<form action="" method="POST" style="margin-left:500px ">
<table >
   <tr>
  <br/>
    <!--<input type="text" name="id" placeholder="id">-->
<br/>

  </tr>
  <tr>
     
 <input type="text" name="name" placeholder="name">
<br/>
  </tr>
   <tr>
    <select name="op">
    <option value="" disabled="disabled"  selected="selected">select room type</option>
    <option value="1">Single</option>
    <option value="2">Double</option>
    <option value="4">Family</option>
</select>
<br/>
  </tr>

   <tr>
     
 <input type="text" name="email" placeholder="email">
<br/>
  </tr>
  <tr>
  <input type="date" name="bday">
  <br/>
  </tr>
  <tr>
     <input type="text" name="ti" placeholder="day">

<br/>
  </tr>
   
  <tr>
     
 <input type="submit"  name="submit" id="log" value="Booking" width="50px">
<!-- <button class="btn info"  name="submit" >Info</button-->
<br/>
  </tr>
</table>


</form>
     </div></div>  
<br>

<h1><strong></strong> </h1>
    <p></p>
    <br>
   
    <br>
    <h3 style=""><span>

</h3>

<div style="font-family: arial;background-color:#007FFF;color: black;padding: 10px;width:1047px;margin-left:150px  ;border: 1px solid black;color: white" align="center"><h3> </h3></div>
</div>


</body>
</html>