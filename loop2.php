<!DOCTYPE html>
<html>
<head>
	<title>if sta</title>
</head>
<body>
<br>
<ul>

<?php
$n1 =1;
$n2 =100;
for ($i=1; $i <=10 ; $i+=2) {

	echo "<li>{$i}</li>"  ;
}
?>
</ul>
<br/>
<h2>while</h2>
<ul>

<?php
$n1 =1;
$n2 =100;
//for ($i=1; $i <=10 ; $i+=2)
$i=1;
while ( $i<= 10) {
 	echo "<li>{$i}</li>"  ;
 	$i++;
 } ?>
</ul>
</body>
</html>