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


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>

<?php include "header.php";?>

<?php
include "./php/db_conn.php";
$sql="SELECT DID,MODEL,IMG FROM devices WHERE BRAND='FLOW';";
$sqll="SELECT DID,MODEL,IMG FROM devices WHERE BRAND='ZEPHYRUS';";
$sqlll="SELECT DID,MODEL,IMG FROM devices WHERE BRAND='STRIX';";
$res=mysqli_query($conn,$sql);
$ress=mysqli_query($conn,$sqll);
$resss=mysqli_query($conn,$sqlll);
?>

	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="img/bg/top.gif">
		<div class="page-info">
			<h2>Laptops</h2>
			<div class="site-breadcrumb">
				<a href="home.php">Home</a>  /
				<span>Laptops</span>
			</div>
		</div>
	</section>
	<!-- Page top end-->




	<!-- Games section -->
	<section class="games-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-7 col-lg-8 col-md-7">
					<div class="row">
						<!-- Blog Item -->
						<?php while($row=mysqli_fetch_array($res)){?>
						<div class="col-lg-4 col-md-6">
							<div class="game-item">
								<img src="<?php echo $row['IMG']?>" alt="ROG FLOW">
								<h5><?php echo $row['MODEL']?></h5>
								<a href="FLOW.php?DID=<?php echo $row['DID']?>" class="read-more">Read More  <img src="img/icons/double-arrow.png" alt="#"/></a>
							</div>
						</div><?php }?>

						<!-- Blog Item -->
						<?php while($row=mysqli_fetch_array($ress)){?>
						<div class="col-lg-4 col-md-6">
							<div class="game-item">
								<img src="<?php echo $row['IMG']?>" alt="ROG ZEPHYRUS">
								<h5><?php echo $row['MODEL']?></h5>
								<a href="ZEPHYRUS.php?DID=<?php echo $row['DID']?>" class="read-more">Read More  <img src="img/icons/double-arrow.png" alt="#"/></a>
							</div>
						</div><?php }?>

						<!-- Blog Item -->
						<?php while($row=mysqli_fetch_array($resss)){?>
						<div class="col-lg-4 col-md-6">
							<div class="game-item">
								<img src="<?php echo $row['IMG']?>" alt="ROG STRIX">
								<h5><?php echo $row['MODEL']?></h5>
								<a href="STRIX.php?DID=<?php echo $row['DID']?>" class="read-more">Read More  <img src="img/icons/double-arrow.png" alt="#"/></a>
							</div>
						</div><?php }?>
					</div>

					<!-- Page Number -->
					<div class="site-pagination">
						<a href="#" class="active">01.</a>
					</div>
				</div>

				<!-- Page Side -->
				<div class="col-xl-3 col-lg-4 col-md-5 sidebar game-page-sideber">
					<div id="stickySidebar">
						<div class="widget-item">
							<div class="categories-widget">
								<h4 class="widget-title">Rog Support</h4>
								<ul>
									<li><a href="https://www.asus.com/microsite/2021/windows11/uk/">Windows 11</a></li>
									<li><a href="https://rog.asus.com/elite">ROG Elite Program</a></li>
									<li><a href="https://rog.asus.com/uk/esport-teams/">ROG esports teams</a></li>
									<li><a href="https://rog.asus.com/uk/articles">News and Articles</a></li>
									<li><a href="https://www.challengermode.com/s/ASUSROGUK">ROG Tournaments</a></li>
								</ul>
							</div>
						</div>
						<div class="widget-item">
							<div class="categories-widget">
								<h4 class="widget-title">WHAT'S HOT</h4>
								<ul>
									<li><a href="https://rog.asus.com/uk/for-those-who-dare/">For Does Who Dare</a></li>
									<li><a href="https://rog.asus.com/uk/event/ROG-Phone-6/">ROG Phone 6: Online Launch Event</a></li>
									<li><a href="https://rog.asus.com/event/for-those-who-dare-boundless/">FOR THOSE WHO DARE: BOUNDLESS Launch Event</a></li>
									<li><a href="https://rog.asus.com/event/ces/">ROG CES 2022 Launch Event</a></li>
									<li><a href="https://www.asus.com/event/ROGDyingLight2_bundle/?utm_source=ROGwebsite&utm_medium=link&utm_campaign=DL2bundle_SYSOP">ROG x Dying Light 2 Global Campaign</a></li>
									<li><a href="https://rog.asus.com/event/scar-runner/">ROG Citadel XV - SCAR Runner</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Games end-->





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
