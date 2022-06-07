<?php
 session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="navbarmycart.css">
	<title>Cart</title>
</head>
<body>
	<br>
 <div class="containernav">
 	<header class="header">
            <a href="#" class="header__logo">We Care</a>

            <ion-icon name="menu-outline" class="header__toggle" id="nav-toggle"></ion-icon>

            <nav class="nav" id="nav-menu">
                <div class="nav__content bd-grid">

                    <ion-icon name="close-outline" class="nav__close" id="nav-close"></ion-icon>
    
                    <div class="nav__perfil">
                        <div class="nav__img">
                            <img src="assets/img/perfil.png" alt="">
                        </div>
                        
                        <div>
                            <a href="#" class="nav__name">We Care</a>
        
                        </div>
                    </div>
    
                    <div class="nav__menu" id="nav_menu">
                        <ul class="nav__list">
                            <li class="nav__item"><a href="loginhome.php#section1" class="nav__link">Home</a></li>
                            <li class="nav__item"><a href="loginhome.php#section2" class="nav__link">About</a></li>
                            <li class="nav__item"><a href="loginhome.php#section3" class="nav__link">Products</a></li>
                            <li class="nav__item"><a href="loginhome.php#section4" class="nav__link">Why we</a></li>
                            <li class="nav__item"><a href="loginhome.php#section5" class="nav__link">Contact</a></li>
                        </ul>
                    </div>
    
               
                </div>
            </nav>

            <?php
            	$count=0;
            	if(isset($_SESSION['cart']))
            	{
            		$count=count($_SESSION['cart']);
            	}
            ?>
            <div class="nav-cart"><a href="mycart.php" style="color:white;"> <i class="fa fa-shopping-cart">(<?php echo $count; ?>) </i></a></div>
            <h4 style="color: white; padding-left: 12px;padding-right:2px ">  <?php echo $_SESSION['userName']; ?></h4>
            <a href="WECARE.html" style="text-decoration: none; cursor: pointer; color: #3664F4;" >Logout</a>
        </header>
       
        <br>
 	<div class="row">
 		<div class="col-lg-12" style="margin-top: 45px;text-align: center;border: rounded bg-light" >
 			<h1>My Cart</h1>
 		</div>
 		<div class="col-lg-9">
 			<table class="table" >
  <thead class="text-center">
    <tr>
      <th scope="col">Serial No.</th>
      <th scope="col">Item Name</th>
      <th scope="col">Item Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody class="text-center">
  	
  	<?php 
  		// $total=0;
  		if(isset($_SESSION['cart']))
  		{
	  		foreach($_SESSION['cart'] as $key => $value)
	  		{
	  			$sr=$key+1;
	  			// $total=$total+$value['price'];
		  		echo"
		  		<tr>
		  		<td>$sr</td>
		  		<td>$value[item_name]</td>
		  		<td>$value[price]<input type='hidden' class='iprice' value='$value[price]'></td>
		  		<td>
		  		<form action='manage_cart.php' method='POST'> 
		  		<input class='text-center iquantity' name='mod_quantity' onchange='this.form.submit();' type='number' value=$value[Quantity] min='1' max='10' >
		  		<input type='hidden' name='item_name' value='$value[item_name]'>
		  		</form> 
		  		</td>
		  		<td class='itotal'>  </td>
		  		<td>
		  		<form action='manage_cart.php' method='POST'>
		  		<button name='Remove_item' class='btn btn-sm btn-outline-danger'> REMOVE </button>
		  		<input type='hidden' name='item_name' value='$value[item_name]'>
		  		</form>
		  		</td>
		  		</tr>
		  		";
	  		}
	  	}	
  	?>

    
  </tbody>
</table>
 		</div>

 		<div class="col-lg-3">
 			<div class="border bg-light rounded p-4">
 				<h4>Grand Total:</h4>
 			  <h5 class="text-right" id="gtotal"></h5>
 			  <br>
 			  <?php 
 			  	if (isset($_SESSION['cart']) && count($_SESSION['cart'])>0) 
 			  	{
 			  		
 			  	
 			   ?>
 			  <form action="purchase.php" method="post">
 			  		  <div class="form-group">
					    <label>Full Name</label>
					    <input type="text" name="fullname" class="form-control" required>
					  </div>
					  <div class="form-group">
					    <label>Phone Number</label>
					    <input type="number" name="phone_no" class="form-control" required>
					  </div>
					   <div class="form-group">
					    <label>Address</label>
					    <input type="text" name="address" class="form-control" required>
					  </div>
					<div class="form-check">
			  		<input class="form-check-input" type="radio" name="payment_mode" value="COD" id="flexRadioDefault2" checked>
			  		<label class="form-check-label" for="flexRadioDefault2">
			    	Cash on delivery
			  		</label>
						</div>
 			  	<button class="btn btn-primary btn-block" name="purchase">Purchase</button>
 			  </form>
 			  <?php 
 				}
 			  ?>

 			</div>
 		</div>

 	</div>
 </div>

<script>
	var gt=0;
	var iprice =document.getElementsByClassName('iprice');
	var iquantity =document.getElementsByClassName('iquantity');
	var itotal =document.getElementsByClassName('itotal');
	var gtotal=document.getElementById('gtotal');

	function subTotal()
	{
		gt=0;
		for (i=0;i<iprice.length;i++) 
		{

			itotal[i].innerText= (iprice[i].value)*(iquantity[i].value);
			gt = gt+(iprice[i].value)*(iquantity[i].value);
		}
		gtotal.innerText=gt;
	}

	subTotal();

</script>

</body>
</html>