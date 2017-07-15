<html>
<body>
<?php
 $m = new mysqli('127.0.0.1', 'root', 'mar','ho12');

if(isset($_GET['id']))
{
$id=$_GET['id'];
$q="delete from inf where id=".$_GET['id'];
//$query1=mysqli_query($q, $m);

if ($m->query($q) === TRUE) {
    //echo "Record deleted successfully";
    header("Location:http://localhost/php_test/TutorialHtml5HotelPhp/");
} else {
    echo "Error deleting record: " . $conn->error;
}

$m->close();
}
?>
</body>
</html>