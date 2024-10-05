	<!DOCTYPE html>
    <html lang="en">
    <head>
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
            <!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
<!-- php part -->
<?php session_start();
include "./php/db_conn.php";
$sqlf="SELECT DID FROM devices WHERE BRAND='FLOW';";
$sqlz="SELECT DID FROM devices WHERE BRAND='ZEPHYRUS';";
$sqls="SELECT DID FROM devices WHERE BRAND='STRIX';";
$res=mysqli_query($conn,$sqlf);
$ress=mysqli_query($conn,$sqlz);
$resss=mysqli_query($conn,$sqls);
$rowf = mysqli_fetch_array($res);
$rowz = mysqli_fetch_array($ress);
$rows= mysqli_fetch_array($resss);
?>
	<!-- Header section -->
	<header class="header-section">
		<div class="header-warp">

			<div class="header-bar-warp d-flex">
				<!-- site logo -->
				<a href="home.php" class="site-logo">
					<img src="./img/logo.png" >
				</a>

				<nav class="top-nav-area w-100">
					<div class="user-panel">
						<li class='active' style='float:right;'>
  						<?php 
						if($_SESSION['logged']==true && $_SESSION['admin']==true){?>
							<a href="admin.php"><?php echo $_SESSION["FNAME"]; ?></a><?php
							echo '  <a href="./php/logout.php"><span>Logout</span></a></li>';
  						}else if($_SESSION['logged']==true){ ?>
  					 		<a href="prof.php"><?php echo $_SESSION["FNAME"]; ?></a><?php
							echo '  <a href="./php/logout.php"><span>Logout</span></a></li>';

							}
 						elseif($_SESSION['logged']==false){
    						echo '<a href="index.php"><span>Login/Register</span></a></li>';
  							}
 						?>
					</div>
					<!-- Menu -->
					<ul class="main-menu primary-menu">
						<li><a href="home.php">Home</a></li>
						<li><a href="laptops.php">Laptops</a>
							<ul class="sub-menu">
								<li><a href="ZEPHYRUS.php?active=1 & DID=<?php echo $rowz['DID']?>">ZEPHYRUS</a></li>
								<li><a href="FLOW.php?active=1 & DID=<?php echo $rowf['DID']?>">FLOW</a></li>
								<li><a href="STRIX.php?active=1 & DID=<?php echo $rows['DID']?>">STRIX</a></li>
							</ul>
						</li>
						<li><a href="order.php">Orders</a></li>
						<li><a href="contact.php">Contact Us</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<!-- Header section end -->
    </body>
    </html>
