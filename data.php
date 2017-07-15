
<table width="100%" border="1">
        <tr> 
          <td><strong><font color="#000000">ID</font></strong></td>
          <td><strong><font color="#000000"> Name</font></strong></td>
          <td><strong><font color="#000000">room</font></strong></td>
          <td><strong><font color="#000000">email</font></strong></td>
          <td><strong><font color="#000000">day</font></strong></td>
          
    <td><strong><font color="#000000">Edit/Delete/Complaints</font></strong></td>
        </tr>
        
    
    <?php
   $m = new mysqli('127.0.0.1', 'root', 'mar','ho12');

if ($mysqli->connect_error) {
    die('Connect Error (' . $m->connect_errno . ') '
            . $mysqli->connect_error);

$query = "SELECT * FROM inf order by id asc;"; 
$result = mysql_query($query); 


?>
  