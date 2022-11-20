<?php
$server="localhost";
$username="root";
$password="";
$db="usersdb";
//1 connect to mysql server
$mysqlconn=mysqli_connect($server,$username,$password);


//2 create the db
$sql="create database if not exists $db";

$status=mysqli_query($mysqlconn,$sql);



//3 connect to the db
$dbconn=mysqli_connect($server,$username,$password,$db);




$sql="create table if not exists users( id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL, surname VARCHAR(30) NOT NULL, email VARCHAR(30) NOT NULL)";
$status=mysqli_query($dbconn,$sql);






?>
