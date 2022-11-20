<?php


require "databaseuser.php";


    
      $Name= $_POST['name'];
      $SurName= $_POST['surname'];
      $Email = $_POST['email'];
   
 

 

$sql="insert into users (name,surname,email) values('$Name','$SurName','$Email');";
      
$status=mysqli_query($dbconn,$sql);


?>
