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
	$sql1 = "SELECT * FROM `devices` WHERE MODEL=\"ROG ZEPHYRUS G14\";";
	$sql2 = "SELECT * FROM `devices` WHERE MODEL=\"ROG FLOW X 13\";";
	$sql3 = "SELECT * FROM `devices` WHERE MODEL=\"ROG STRIX G15\";";
	$rs1 = mysqli_query($conn,$sql1);
	$rs2 = mysqli_query($conn,$sql2);
	$rs3 = mysqli_query($conn,$sql3);
	?>

	
	<!-- ROG section -->
	<section class="hero-section overflow-hidden">
		<div class="hero-slider owl-carousel">
		<div class="hero-item set-bg d-flex align-items-center justify-content-center text-center" data-setbg="img/bg/ROG.gif">
				<div class="container">
					<h2>Republic Of Gamers</h2>
					<p>Are You Ready?<br>Find Out What Laptop suits you!</p>
					<a href="laptops.php" class="site-btn">Read More  <img src="img/icons/double-arrow.png" alt="#"/></a>
				</div>
			</div>
			<div class="hero-item set-bg d-flex align-items-center justify-content-center text-center" data-setbg="img/bg/ROG.gif">
				<div class="container">
					<h2>Enjoyed the Website?</h2>
					<p>Leave a Comment for me!</p>
					<a href="contact.php" class="site-btn">Read More  <img src="img/icons/double-arrow.png" alt="#"/></a>
				</div>
			</div>
		</div>
	</section>
	<!-- ROG section end-->


	<!-- Intro section -->
	<section class="intro-section">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="intro-text-box text-box text-white">
						<div class="top-meta">ROG Flow  /  in <a href="laptops.php">Laptops</a></div>
						<h3>Explore ROG Flow!</h3>
						<p>Is It a Table? Is It a Laptop? Maybe both!</p>
						<a href="laptops.php" class="read-more">Find Out More  <img src="img/icons/double-arrow.png" alt="#"/></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-text-box text-box text-white">
						<div class="top-meta">ROG Strix  /  in <a href="laptops.php">Laptops</a></div>
						<h3>Daily User? Gamer?</h3>
						<p>Are You Looking For Gaming Laptop that can be used anywhere? Strix Is For You! </p>
						<a href="laptops.php" class="read-more">Find Out More  <img src="img/icons/double-arrow.png" alt="#"/></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-text-box text-box text-white">
						<div class="top-meta">ROG ZEPHYRUS  /  in <a href="laptops.php">Laptops</a></div>
						<h3>Heavy Project? What a Joke!</h3>
						<p>Doesn't Matter It's An Space Travell or Gaming; ZEPHYRUS can Handle It!</p>
						<a href="laptops.php" class="read-more">Find Out More  <img src="img/icons/double-arrow.png" alt="#"/></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Intro section end -->


	<!-- Blog section -->
	<section class="blog-section spad">
		<div class="container">
			<div class="row">
				<div class="col-xl-9 col-lg-8 col-md-7">
					<div class="section-title text-white">
						<h2>Latest Offers</h2>
					</div>
					<ul class="blog-filter">
						<li><a href="FLOW.php">Flow</a></li>
						<li><a href="STRIX.php">Strix</a></li>
						<li><a href="ZEPHYRUS.php">Zephyrus</a></li>
					</ul>
					<!-- Blog item -->
					
					<div class="blog-item">
					<?php while ($row1=mysqli_fetch_array($rs1)) {?>
						<div class="blog-thumb">
							<img src="<?php echo $row1['IMG']?>" alt="ROG ZEPHYRUS">
						</div>
	
						<div class="blog-text text-box text-white">
							<div class="top-meta">ROG ZEPHYRUS  /  in <a href="ZEPHYRUS.php?DID=<?php echo $row1['DID']?>">ZEPHYRUS</a></div>
							
								<h3><?php echo $row1['MODEL'];?></h3>
							<p>The brand new 2022 Zephyrus G14 is powered by AMD and Windows 11 out of the box. Featuring new Ryzen™ 9 processors and Radeon™ RX 6800S mobile graphics, this all-AMD powerhouse is ready for any gaming or multitasking you can throw at it. The G14 also leverages AMD technologies like Smartshift and Smart Access Memory for an extra edge. AMD Smartshift allows the CPU and GPU to dynamically allocate power when and where it is needed the most, and AMD Smart Access Memory gives the CPU full access to the GPU’s full VRAM, improving performance in games.</p>
							<a href="ZEPHYRUS.php?DID=<?php echo $row1['DID']?>" class="read-more">Shop Now<img src="img/icons/double-arrow.png" alt="Shop Now"/></a>
						</div><?php }?>
					</div>
					<!-- Blog item -->
					
					<div class="blog-item">
					<?php while ($row2=mysqli_fetch_array($rs2)) {?>
						<div class="blog-thumb">
							<img src="<?php echo $row2['IMG']?>" alt="ROG FLOW">
						</div>
						<div class="blog-text text-box text-white">
							<div class="top-meta">ROG Flow  /  in <a href="FLOW.php?DID=<?php echo $row2['DID']?>">FLOW</a></div>
							
								<h3><?php echo $row2['MODEL'];?></h3>
							<p>Go small without sacrificing power. Even with an ultralight, compact chassis, the 2022 ROG Flow X13 speeds through tasks with cutting-edge processors up to a Ryzen™ 9 6900HS. Up to a discrete GeForce RTX™ 3050 Ti GPU makes everyday play smooth and silky. Move more freely than ever and create, stream, and game wherever the mood strikes.</p>
							<a href="FLOW.php?DID=<?php echo $row2['DID']?>" class="read-more">Shop Now<img src="img/icons/double-arrow.png" alt="Shop Now"/></a>
						</div><?php }?>
					</div>
					<!-- Blog item -->
					
					<div class="blog-item">
					<?php while ($row3=mysqli_fetch_array($rs3)) {?>
						<div class="blog-thumb">
							<img src="<?php echo $row3['IMG']?>" alt="ROG STRIX">
						</div>
						<div class="blog-text text-box text-white">
							<div class="top-meta">ROG Strix  /  in <a href="STRIX.php?DID=<?php echo $row3['DID']?>">STRIX</a></div>
								<h3><?php echo $row3['MODEL'];?></h3>
							<p>The latest AMD Ryzen™ 9 6900HX CPU paired with up to a NVIDIA® GeForce RTX™ 3080 Laptop GPU with 150W max TGP and MUX Switch form the backbone of the brand new 2022 Strix G. Cutting-edge DDR5 memory keeps your CPU fed with information at all times, ensuring a responsive experience. PCIe® 4.0 SSD support means that you’ll never need to wait for file transfers or game loading screens again.</p>
							<a href="STRIX.php?DID=<?php echo $row3['DID']?>" class="read-more">Show Now<img src="img/icons/double-arrow.png" alt="Shop Now"/></a>
						</div><?php }?>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- Blog section end -->
<!--https://www.youtube.com/watch?v=W9OaL31rXQA&feature=youtu.be-->

	<!-- Intro section -->
	<section class="intro-video-section set-bg d-flex align-items-end " data-setbg="./img/bg/topbg.gif">
		<a href="https://www.youtube.com/watch?v=W9OaL31rXQA" class="video-play-btn video-popup"><img src="img/icons/solid-right-arrow.png" alt="#"></a>
		<div class="container">
			<div class="video-text">
				<h2>Get Ready!</h2>
				<p>Welcome To ROG World!</p>
			</div>
		</div>
	</section>
	<!-- Intro section end -->



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
