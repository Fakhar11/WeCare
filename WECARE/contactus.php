<?php

header('location:WECARE.html#contactid');
try {
    $db= mysqli_connect("localhost","root","","wecare");

} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){
  $name= $_POST['name'];
  $email= $_POST['email'];
  $message= $_POST['message'];  

  $is_insert=$db->query("INSERT INTO `contactus`(`Id`, `name`, `email`, `message`) VALUES ('','$name','$email','$message')");

    if ($is_insert==TRUE) {
        echo "Thanks for your message";
        exit();
        }
}

?>