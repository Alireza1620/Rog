<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>ROG - Republic Of Gamers</title>
	<meta charset="UTF-8">
	<meta name="description" content="EndGam Gaming Magazine Template">
	<meta name="keywords" content="endGam,gGaming, magazine, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.jpg" rel="shortcut icon"/>
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/r/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/r/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/r/slicknav.min.css"/>
	<link rel="stylesheet" href="css/r/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/r/magnific-popup.css"/>
	<link rel="stylesheet" href="css/r/animate.css"/>


	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>



</head>
<body>


<?php include "header.php";?>

<!-- php Part -->
<?php
include "./php/db_conn.php";
$email=$_SESSION['EMAIL'];
$sql= "SELECT * FROM `user` WHERE EMAIL='$email';";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);
?> 

	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="img/bg/top.gif">
		<div class="page-info">
			<h2>Profile Page</h2>
			<div class="site-breadcrumb">
				<a href="home.php">Home</a>  /
				<span>Profile</span>
			</div>
		</div>
	</section>
	<!-- Page top end-->


	<!-- Contact page -->
	<section class="contact-page">
		<div class="container">
				<div class="col-lg-5 order-1 order-lg-2 contact-text text-white">
					<h3>Howdy <?php echo $row['FNAME']." ".$row['LNAME']?>!</h3>
					<p>This page showing your profile details.<br>Be aware Only action you can do now is delete your profile XD<br><br>In case I don't see ya . . . good afternoon, good evening, and good night! The Truman Show[1998].</p>
					<div class="cont-info">
						<div class="ci-icon"><img src="img/icons/location.png" alt=""></div>
						<div class="ci-text"><?php echo $row['ADDRESS']?></div>
					</div>
					<div class="cont-info">
						<div class="ci-icon"><img src="img/icons/phone.png" alt=""></div>
						<div class="ci-text"><?php echo $row['PNUM']?></div>
					</div>
					<div class="cont-info">
						<div class="ci-icon"><img src="img/icons/mail.png" alt=""></div>
						<div class="ci-text"><?php echo $row['EMAIL']?></div>
					</div>
					<div class="delt">
						<a href="./php/deleteprof.php?EMAIL=<?php echo $email?>">Delete Profile!</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact page end-->





	<?php include "footer.php";?>


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.sticky-sidebar.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
