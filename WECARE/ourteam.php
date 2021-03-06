<?php
 session_start();


?>


<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Meet Our Team</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="nav.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="ourteamstyle.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">


</head>
	

<body>
	
	<div class="containerheaderss" >
		
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
            <h4 style="color: white; padding-left: 12px;padding-right:2px "> Welcome <?php echo $_SESSION['userName']; ?></h4>
            <a href="WECARE.html" style="text-decoration: none; cursor: pointer; color: #3664F4;" >Logout</a>
        </header>
       
        <br>
        <br>
        <br>

        <section>
            <br>
        <br>
        <br>
    <h1 class="title">our team</h1>
    <div class="team-row">
        <div class="member">
            <img src="fakharimg.jpg" alt="">
            <h2>Fakhar Sohail</h2>
            <p><b>Production Department head</b><br>Manages all day to day operations for the development phases.</p>
        </div>
        <div class="member">
            <img src="agbimg.jpg" alt="">
            <h2>Abdul Ghaffar Butt</h2>
               <p><b>Finance Department head</b><br>Manages all financial operations for the development and marketing.</p>
            
        </div>
        <div class="member">
            <img src="usraimg.jpg" alt="">
            <h2>Usra Karim</h2>
            <p><b>Marketing Department head</b><br>Responsibile for promoting the products and promotions of our company.</p>
        </div>
    </div>
    <br>
    <div class="teacher-team">
       <div class="containerteach">
        <div class="right">
            <img src="sirimage.png" alt="img">
        </div>
        <div class="left">
            <div class="content">
                <i class="fas fa-quote-left fa-3x"></i>
                <p><b>Being a supervisor of this project, I want to tell all of the clients and the future clients about the hardwork of the team members. The idea of bringing automation is totally incredible. I wish the team good luck with their business idea.</b>
                </p>
                <div class="author">
                    <h2>Mr. Abdul Rehman</h2>
                    <p><b>FYP Supervisor</b></p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<br>
<br>
<section>
     <div class="teacher-team">
       <div class="containerteach">
        <div class="right">
            <img src="sirimage2.png">
        </div>
        <div class="left">
            <div class="content">
                <i class="fas fa-quote-left fa-3x"></i>
                <p><b>Being a manager of this project, I have guided the team to look into each sight that would make the 100% success rate. The potential that I have seen in this team is their real success and their positivity will lead them towards triumph.</b>
                </p>
                <div class="author">
                    <h2>Mr. Javaid Iqbal</h2>
                    <p><b>FYP Manager</b></p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
</body>

<script>
    document.getElementsByTagName("h1")[0].style.fontSize = "6vw";
</script>
</html>