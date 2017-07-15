<?php
$n =array(1,2100,90,1000,999,0 );
?>
<!DOCTYPE html>
<html>
<head>
	<title>opertion</title>
</head>
<body>
<br>
<h4> max</h4>
<?php 

 echo max($n);
 
 ?>

<br>
<h4> min</h4>
<?php 

 echo min($n); ?>
<br>
<h4> count</h4>
<?php 

 echo count($n); ?>
 <br>
<h4> sort</h4>
<?php 

 echo sort($n); echo print_r($n); ?>
 <br>
<h4> rsort</h4>
<?php 

 echo rsort($n); echo print_r($n); ?>
 <br>
<h4> in array</h4>
<?php 

 echo in_array(1,$n ); ?>
</body>
</html>