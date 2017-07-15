<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login form shake effect</title>
  
  
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
<?php
if (isset($_POST['submit'])) {
  $name=$_POST['username'];
$pas=$_POST['password'];
if (($name=='mar')&&($pas=="123")) {

header("Location:TutorialHtml5HotelPhp/index.php");
} 
else{
  header("Location: loop2.php");
}

}

?>
<form action="" method="POST">
  <div class="login-form">
     <h1>login</h1>
     <div class="form-group ">
       <input type="text" class="form-control" name="username"  placeholder="Username " id="UserName">
       <i class="fa fa-user"></i>
     </div>
     <div class="form-group log-status">
       <input type="password" class="form-control" name="password" placeholder="Password" id="Passwod">
       <i class="fa fa-lock"></i>
     </div>
      <!--<span class="alert">Invalid Credentials</span>-->
      <!--<a class="link" href="#">Lost your password?</a>-->
     <input type="submit" name="submit" value="log in" class="log-btn" >
    
   </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>
</form>
</body>
</html>