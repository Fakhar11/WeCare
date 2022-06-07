<html>
<head>
	<title>Sign Up form</title>
</head>
<body>
<?php
$mysql= new mysqli("localhost","root","","wecare");

$errno =mysqli_connect_errno();
$error =mysqli_connect_error();


if($errno){
	echo $erro." ".$error;
	echo "not connected";
}
else
{
	echo "<b>connected</b>";
}
?>
</body>
</html>