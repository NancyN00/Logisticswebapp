<?php

   if (isset($_POST['submit'])) {
    $name = $_POST ['name'];
    $email = $_POST ['email'];
    $phonenumber = $_POST ['phonenumber'];
    $password = md5($_POST ['password']);

    // var_dump ($name,$email,$phonenumber,$password);
     
     require_once "logistics.php";

    $insertQuery = "INSERT INTO `orderslist`(`id`, `name`, `email`, `phone`, `password`) VALUES (null,'$name','$email','$email','$password')";
     $register = mysqli_query($conn,$insertQuery);
    if($register) {
     echo "thank you";
     }else{
       echo "sorry, try again";
     }
   }
?>