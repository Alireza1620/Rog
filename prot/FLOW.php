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
	$getid=$_GET['DID'];
	$sql="SELECT * FROM devices WHERE DID='$getid';";
	$res=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($res);	
	?>

	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="img/bg/top.gif">
		<div class="page-info">
			<h2><?php echo $row['MODEL']?></h2>
			<div class="site-breadcrumb">
				<a href="home.php">Home</a>  /
				<span>FLOW</span>
			</div>
		</div>
	</section>
	<!-- Page top end-->


	<!-- Games section -->
	<section class="games-single-page">
		<div class="container">
			<div class="game-single-preview">
				<img src="img/blog/flow.webp" alt="ROG">
			</div>
			<div class="row">
				<div class="col-xl-9 col-lg-8 col-md-7 game-single-content">
					<div class="gs-meta">ROG FLOW  /  in <a href="laptops.php">Laptops</a></div>
					<h2 class="gs-title"><?php echo $row['MODEL']?></h2>
					<div class="col-xl-9 col-lg-8 col-md-7 game-single-content">
					<div class="gs-meta">11.11.18  /  in <a href="">Games</a></div>
					<h2 class="gs-title"><?php echo $row['MODEL']?></h2>
					<h4>Gameplay</h4>
					<p>NVIDIA DLSS gives games a speed boost with uncompromised image quality. Crank up the settings and resolution for an even better visual experience. Ray Tracing is the holy grail of graphics. It simulates how light behaves in the real world to produce the most realistic and immersive graphics for gamers and creators - with great performance, thanks to 2nd gen RT Cores. NVIDIA Max-Q is a suite of technologies powered by AI that optimise laptops to deliver high performance in thin form factors.</p>
					<h4>Featuress</h4>
					<p>Brand: <?php echo $row['BRAND']?></p>
					<p>CPU: <?php echo $row['CPU']?></p>
					<p>GPU: <?php echo $row['GPU']?></p>
					<p>PRICE: <?php echo $row['DPRICE']?></p>
					<p>DEVICE ID: <?php echo $row['DID']?></p>
					<div class="site-pagination">
						<a href="./php/addorder.php?DID=<?php echo $getid?>&UID=<?php echo $_SESSION['UID']?>" class="activee">ADD To Orders!</a>
					</div>
				</div>

				</div>
				<div class="col-xl-3 col-lg-4 col-md-5 sidebar game-page-sideber">
					<div id="stickySidebar">
						<div class="widget-item">
							<div class="rating-widget">
								<h4 class="widget-title">Ratings</h4>
								<ul>
									<li>Price<span>3.5/5</span></li>
									<li>Graphics<span>4.5/5</span></li>
									<li>Cooling<span>3.5/5</span></li>
									<li>CPU<span>4.5/5</span></li>
									<li>Weight<span>4.5/5</span></li>
								</ul>
								<div class="rating">
									<h5><i>Rating</i><span>4.5</span> / 5</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	




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
