<?php
$host="127.0.0.1";
$user="root";
$password="";
$database="ho12";
$link = mysql_connect('127.0.0.1', 'root', 'mar','ho12'); 
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);
?>