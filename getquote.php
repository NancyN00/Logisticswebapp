<?php
   if(isset($_POST['submit'])){

    $location = $_POST ['location'];
    $todestination = $_POST ['todestination'];
    $email = $_POST ['email'];
   
    $contactnumber = $_POST ['contactnumber'];
    
    
  //var_dump($location,$todestination,$email,$contactnumber,$password);

    require_once 'logistics.php';
    $insertquery = "INSERT INTO `logana`(`location`, `todestination`, `email`, `contactnumber`) VALUES ('$location]','$todestination','$email','$password','$contactnumber')";
    $register = mysqli_query($conn,$insertquery);
    if($register){
       echo 'welcome';
        }else{
        echo 'try again';
    }

}

?>