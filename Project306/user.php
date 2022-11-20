<?php
require "databaseuser.php";



$username=$_GET["username"];


    
    

   $sql="select * from users;";


  $result=mysqli_query($dbconn,$sql);
 
   echo "<table>"; 
 while($row=mysqli_fetch_assoc($result)){
if($expensename==$row['name'])

echo "<tr>". "<td style='border:1px solid black;'>".$row['name'] ."</td>"."<td style='border:1px solid black;'>".$row['surname'] ."</td>"."</tr>"."</td>"."<td style='border:1px solid black;'>".$row['email'] ."</td>"."</tr>";

} 
 echo "</table>";
?>