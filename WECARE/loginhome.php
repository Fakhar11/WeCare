<?php
 session_start();


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>WeCare</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="nav.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>


</head>
	

<body>
	
	<div class="container" >
		
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
                            <li class="nav__item"><a href="#section1" class="nav__link">Home</a></li>
                            <li class="nav__item"><a href="#section2" class="nav__link">About</a></li>
                            <li class="nav__item"><a href="#section3" class="nav__link">Products</a></li>
                            <li class="nav__item"><a href="#section4" class="nav__link">Why we</a></li>
                            <li class="nav__item"><a href="#section5" class="nav__link">Contact</a></li>
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
            <h4 style="color: white; padding-left: 12px;padding-right:2px "> Welcome <?php echo $_SESSION['userName']; ?></h4>
            <a href="WECARE.html" style="text-decoration: none; cursor: pointer; color: #3664F4;" >Logout</a>
        </header>
        <br>
		<br>
		<br> 

		<!-- section 1 -->
		<div class="content" id="section1">
			<br>
			<br>
			<br>
			<a href="" class="btn"> 2022 new Innovative work</a>
			<h1> You will always <br> feel automation in work </h1>
			<p> Technology that will definitely gives automation.</p>
		</div>

		<img src="cncfront.png" class="feature-image">
		<br>
		<br>
		<br>
		

		<!-- <div class="b1"><a href="wecarelogin.php"> Sign Up </a></div>
		<div class="b2"><a href="login.php"> Log In </a></div> -->
		<h3 style="padding: 12px;margin-left: 100px; color: black;"><b>Welcome <?php echo $_SESSION['userName']; ?></b></h3>
		<p style="padding: 12px; margin-left: 100px; color:black;"><i>We are pleased to serve you dear client.</i></p>

	</div>


    
   <!-- container second going to be start for about us -->
  
   		<section class="about" id="section2">
   			<div class="main-about">
   				<img src="about-left-image.png">
   				<div class="about-text"> 
   					<h1>About Us</h1>
   					<h5>Service Providers <span> & Developers</span></h5>
   					<p style="font-family:georgia,garamond,serif;font-size:20px;font-style:italic;">We are a team with the solution to your problems. Looking for automation in your work, then this is the best place! What we offer matters but the most thing that you are going to love about us is quality, professionalism and affordability. We are a team with the belief of helping the mankind as much as we can. It would be our honours to serve you for the automation you are looking for in your desired field. We are pleased to inform you about our professional team.</p>
   					<button type="button" onclick="location.href='ourTeam.php'"> Meet Our Team</button>
   				</div>
   			</div>	
   		</section>


   <!-- section 3 starting; products -->
   <div class="section-product" id="section3">
   	<div class="cards">      
   		<div class="new-arrivals">
   		<br>
   		<br> 
   			<h1>Our featured products</h1>
   		</div>

   		<!-- card number 1 for mini machine -->
   		


   		<form action="manage_cart.php" method="post">
   		<div class="card">
   			<div class="image-section">
   				<img src="minipro.jpg">
   			</div>
   			<div class="description">
   				<h1>Mini CNC Plotter</h1>
   				<p><b>Price:</b><span>Rs.20,000</span> <del>Rs.22,000</del></p>
   			</div>
   			<div class="button-group">
   				<!-- <a href="" class="cart"> Add to cart </a> -->
   				<button type="submit" class="cart" name="add_to_cart"> Add to cart </button>
   				<input type="hidden" name="item_name" value="Mini cnc plotter machine">
   				<input type="hidden" name="price" value="20000">
   			</div>
   			<br>
   		</div>
   		</form>

   		<!-- card number 2 for  machine -->
   		<form action="manage_cart.php" method="post">
   		<div class="card">
   			<div class="image-section">
   				<img src="femalecnc.jpg">
   			</div>
   			<div class="description">
   				<h1>Industrial CNC Plotter</h1>
   				<p><b>Price:</b><span>Rs.500,000</span> <del>Rs.550,000</del></p>
   			</div>
   			<div class="button-group">
   				<!-- <a href="" class="cart"> Add to cart </a> -->
   				<button type="submit" class="cart" name="add_to_cart"> Add to cart </button>
   				<input type="hidden" name="item_name" value="Industrial cnc plotter machine">
   				<input type="hidden" name="price" value="500000">
   			</div>
   			<br>
   		</div>
   		</form>
   		<!-- card number 3 for metered services -->
   		<form action="manage_cart.php" method="post">
   		<div class="card">
   			<div class="image-section">
   				<img src="pay.jpg">
   			</div>
   			<div class="description">
   				<h1>Metered Service</h1>
   				<p><b>Price:</b><span>Rs.2500 monthly</span></p>
   			</div>
   			<div class="button-group">
   				<!-- <a href="" class="cart"> Add to cart </a> -->
   				<button type="submit" class="cart" name="add_to_cart"> Add to cart </button>
   				<input type="hidden" name="item_name" value="Metered service">
   				<input type="hidden" name="price" value="2500">
   			</div>
   			<br>
   		</div>
   	</div>	
   </div>
</form>

 <!-- creating section 4 -->
 
<div class="achievements" id="section4">
	<div class="title">
		<h1>Why Trust Us</h1>
		<p> There are various views that will make you to belief on us. The main thing that we assure is about working functionality.We will prove our loyality to you by following concrete proofs</p>
	</div>
	<div class="row">
		<div class="col">
			<div class="counter-box">
				<i class="fa fa-trophy"></i>
				<h2 class="counter">180</h2>
				<h4>Machines Delivered</h4>
			</div>
		</div>
		<div class="col">
			<div class="counter-box">
				<i class="fa fa-user"></i>
				<h2 class="counter">1</h2><span>k</span>
				<h4>Clients</h4>
			</div>
		</div>
		<div class="col">
			<div class="counter-box">
				<i class="fa fa-money"></i>
				<h2 class="counter">50</h2>
				<h4>Metered service users</h4>
			</div>
		</div>
		<div class="col">
			<div class="counter-box">
				<i class="fa fa-globe"></i>
				<h2 class="counter">12</h2>
				<h4>International clients</h4>
			</div>
		</div>
	</div>
</div>
 <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
 <script src="jquery.counterup.min.js"></script>
 <script>
 	jQuery(document).ready(function($){
 		$('.counter').counterUp({
    delay: 10,
    time: 1000
});
 	});
 </script>
 
<!-- starting next section of contact us -->

<!-- <div class="contactus">
	<div class="container-contacts">
	<h2>Contact Us</h2>

	<div class="row100">

		<div class="col">
			<div class="inputBox">
				<input type="text" name="" required="required">
				<span class="text">Name</span>
				<span class="line"></span>
			</div>
		</div>

		<div class="col">
			<div class="inputBox">
				<input type="text" name="" required="required">
				<span class="text">Phone</span>
				<span class="line"></span>
			</div>
		</div>

		<div class="col">
			<div class="inputBox">
				<input type="text" name="" required="required">
				<span class="text">Email</span>
				<span class="line"></span>
			</div>
		</div>

		<div class="col">
			<div class="inputBox">
				<input type="text" name="" required="required">
				<span class="text"> City </span>
				<span class="line"> </span>
			</div>
		</div>
	
    
	<div class="row100">
		<div class="col">
			<div class="inputBox textarea">  
				<textarea required="required"></textarea>
				<span class="text"> Type your message here..! </span>
				<span class="line"></span>
			</div>
		</div>
	</div>

	<div class="row100">
		<div class="col">
			<input type="submit" value=" send ">
		</div>
	</div>
</div>
</div>
</div> -->

<section class="contact" id="section5">
	<div class="contentcont">
		<h2> Contact Us </h2>
		<p> <b>We are just a message away...! Do not hesitate to share your thoughts and queries with us. Feel free to contact us at anytime.</b></p>
	</div>
	<div class="container-contact">
		<div class="contactInfo">
			<div class="box">
				<div class="icon"><i class="fa fa-location-arrow"></i></div>
				<div class="text">
					<h3>Address</h3>
					<p>3-A Architecture Society,<br> Khayaban e Jinnah road,<br> Johar Town,Lahore</p>
				</div>
			</div>
		
		<div class="box">
				<div class="icon"><i class="fa fa-phone" ></i></div>
				<div class="text">
					<h3>Phone</h3>
					<p>+92-306-6144141</p>
				</div>
			</div>
		
		<div class="box">
			<div class="icon"><i class="fa fa-envelope"></i></div>
				<div class="text">
					<h3>Email</h3>
					<p>wecare@gmail.com</p>
				</div>
			</div>
		</div>

		<div class="contactForm">
			<form>

				<h2>Send Message</h2>

				<div class="inputBox">
					<input type="text" name="" required="required">
					<span>Full Name</span>
				</div>

				<div class="inputBox">
					<input type="text" name="" required="required">
					<span>Email</span>
				</div>

				<div class="inputBox">
					<textarea required="required"></textarea> 
					<span>Type your Message...!</span>
				</div>

				<div class="inputbox">
					<input type="submit" name="" value="Send">
				</div>
			</form>
		</div>
	</div>
</section>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

<script>
	var btnContainer = document.getElementsById('nav_menu')
	var btns=btnContainer.getElementsByClassName('nav__item')
	for (var i = 0;i<btns.length;i++) 
	{
		btns[i].addEventListener('click',function(){
			var current=document.getElementsByClassName("active");
			current[0].className=current[0].className.replace("active");
			this.className += "active";
		})
	}

