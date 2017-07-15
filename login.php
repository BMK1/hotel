
<!DOCTYPE html>
<html>
<head>
	<title>post</title>
</head>
<body>
<?php
if (isset($_POST['submit'])) {
	$name=$_POST['username'];
$pas=$_POST['password'];
if (($name=='mar')&&($pas=="123")) {

header("Location: callop.php");
} 
else{
	header("Location: loop2.php");
}

}

?>
 
<form action="" method="POST">
username: <input type="text" name="username">
password: <input type="password" name="password">
<input type="submit" name="submit" value="log in">
</form>
</body>
</html>