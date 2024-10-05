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

	<?php include "header.php"; ?>


	<!-- php Part -->
	<?php
	include "./php/db_conn.php";
	$sql="SELECT * FROM devices";
	$res=mysqli_query($conn,$sql);
	?>

	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="img/bg/top.gif">
		<div class="page-info">
			<h2>Admin Page</h2>
			<div class="site-breadcrumb">
				<a href="add.php">Add Devices</a>  /
				<span>Edit Devices</span>
			</div>
		</div>
	</section>
	<!-- Page top end-->


<!-- Admin page -->
<section class="contact-page">
		<div class="container">
				<table class="styled-table">
    				<thead>
      					<tr>
          				<th>Device ID</th>
           				<th class="smal">Brand</th>
						<th>Model</th>
						<th class="display">Cpu</th>
						<th class="display">Gpu</th>
						<th>Price</th>
						<th></th>
						<th></th>
        				</tr>
    				</thead>
					<tbody>
						<?php while($row=mysqli_fetch_assoc($res)){?>
       					 <tr>
								<td><?php echo $row['DID']?></td>
								<td class="smal"><?php echo $row['BRAND']?></td>
								<td><?php echo $row['MODEL']?></td>
								<td class="display"><?php echo $row['CPU']?></td>
								<td class="display"><?php echo $row['GPU']?></td>
								<td><?php echo $row['DPRICE']?></td>
								
								<td>
									<a href="editdevice.php?Did=<?php echo $row['DID']?>">Edit</a>

								<td>
									<a href="./php/devicedelete.php?Did=<?php echo $row['DID']?>">Delete</a>
								</td>

							
       					 </tr>
						 <?php } ?>
    				</tbody>
				</table>
		</div>
	</section>
	<!-- Admin page end-->





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
