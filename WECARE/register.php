<?php

session_start();
header('location:login.php');

$con= mysqli_connect('localhost','root','','wecare');


$userName= $_POST['userName'];
$email= $_POST['email'];
$password= $_POST['password'];

$q= "select * from signup where userName = '$userName'&&  email = '$email' && password = '$password'";
$result= mysqli_query($con,$q);
$num= mysqli_num_rows($result);
if ($num==1) {
	echo "Already exsits";
}
else{
 $qy ="INSERT INTO `signup`(`Id`, `userName`, `email`, `password`) VALUES ('','$userName','$email','$password')";
 mysqli_query($con,$qy);	
}
?>