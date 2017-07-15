<!DOCTYPE html>
<html>
<head>
  <title>post</title>
</head>
<body>
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
   $mysql = mysqli_connect('127.0.0.1', 'root', 'mar','ho12');

$query = "SELECT * FROM inf order by id asc;"; 
$result = mysqli_query($mysql,$query); 


 echo "<table><tr><td>id</td><td>name</td><td>room_type</td><td>email</td><td>ti</td><td></td><td></td>";
while($row=mysql_fetch_array($result))
{
echo "<tr><td>".$row['id']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['room_type']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['ti']."</td>";


echo "<td><a href='delete_grid.php?id=".$row['id']."'>delete</a></td><tr>";
}
?>
</ol>
    
  <?php } mysqli_free_result($result); ?>
  </table>
  </body>
  </html>  
  echo "<table><tr><td>id</td><td>name</td><td>room_type</td><td>email</td><td>ti</td><td></td><td></td>";
while($query2=mysql_fetch_array($query1))
{
echo "<tr><td>".$row['id']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['room_type']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['ti']."</td>";


echo "<td><a href='delete_grid.php?id=".$row['id']."'>delete</a></td><tr>";
}
?>
</ol>
</table>