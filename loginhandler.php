<?php
if(isset($_POST['click'])) {

    $email = $_POST['email'];
    $password= $_POST['password'];
    //connect to our db
    require_once('logistics.php');

    $querydata = "SELECT * FROM orderslist WHERE email='$email' and password='$password'";
    $usersFound = mysqli_query($conn, $querydata);
    //check numbers of users found in our tables
    $countFoundUsers = mysqli_num_rows($usersFound );
    
   if($countFoundUsers > 0) {
      header ("location:index.php");

   } else{
      echo 'Password given or username is incorrect';
   }
}
 else {

 }
?>