<!DOCTYPE html>
<html>
<head>
	<title>if sta</title>
</head>
<body>
<br>
<?php

show(1,100,99);
 function show($n1,$n2,$n3)
{
if (($n3>=$n1)&&($n3<=$n2)){
	echo "inside";
}
else{
	echo "outside";
}
}

?>

</body>
</html>