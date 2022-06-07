<?php

session_start();


$con= mysqli_connect('localhost','root','','wecare');


$userName= $_POST['userName'];
// $email= $_POST['email'];
$password= $_POST['password'];

$q= "select * from signup where userName = '$userName' && password = '$password'";
$result= mysqli_query($con,$q);
$num= mysqli_num_rows($result);
if ($num==1) {
	$_SESSION['userName']=$userName;
    header('location:loginhome.php');
}
else{
 
 $qy = header('location:login.php');
  
}
?>