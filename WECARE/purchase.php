<?php
session_start();
$con=mysqli_connect("localhost","root","","wecare");

if (mysqli_connect_error()) 
{
	            echo "<script>
	            alert('cannot connect to database..!')
				alert('Item added');
				window.location.href='loginhome.php';
				</script>";
				exit();
}

if ($_SERVER["REQUEST_METHOD"]== "POST") 
{
	if (isset($_POST['purchase'])) 
	{
		$query1 = "INSERT into order_manager(`order_id` ,`fullname`, `phone_no`, `address`, `payment_mode`) VALUES ('','$_POST[fullname]','$_POST[phone_no]','$_POST[address]','$_POST[payment_mode]')";
		if (mysqli_query($con,$query1)) 
		{
			$order_id=mysqli_insert_id($con);
			$query2="INSERT INTO `user_orders`(`order_id`, `item_name`, `price`, `quantity`) VALUES (?,?,?,?)";
			$stmt=mysqli_prepare($con,$query2);
			if ($stmt) 
			{
				mysqli_stmt_bind_param($stmt,"isii",$order_id,$item_name,$price,$quantity);
				foreach($_SESSION['cart'] as $key => $values)
				{
					$item_name=$values['item_name'];
					$price=$values['price'];
					$quantity=$values['Quantity'];
					mysqli_stmt_execute($stmt);
				}
				unset($_SESSION['cart']);
				echo "<script>
	            alert('Order placed..!')
				window.location.href='loginhome.php';
				</script>";
			}
			else
			{
				 echo "<script>
	            alert('SQL query prepared error')
				alert('Item added');
				window.location.href='loginhome.php';
				</script>";
			}
		}
		else
		{
			 echo "<script>
	            alert('SQL error')
				alert('Item added');
				window.location.href='loginhome.php';
				</script>";
			
		}
	}
}

?>