<?php
$host = "localhost";
$user = "root";
$password = "";
$dbName = "logistics";


$conn = mysqli_connect($host,$user,$password,$dbName);
if (!$conn){
    die("DB connection failed!!!");
}