<?php
require 'car.inc';
$mar1=new cars();
$mar1->color="red";
echo $mar1->color;

?>
<br>
<?php

echo print_r($mar1->getower());
?>
<br>
<?php
$mar1->get("1990");
echo $mar1->pr();
?>