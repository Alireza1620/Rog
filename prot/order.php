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
    session_start();
    $id=$_SESSION["UID"];
	$sql="SELECT * FROM `order` JOIN devices on order.DVCID=devices.DID WHERE UID=$id";
    $sum="SELECT SUM(PRICE) AS total FROM `order` WHERE UID=$id AND PROG='Pending';";
    $sres=mysqli_query($conn,$sum);
    $su=mysqli_fetch_assoc($sres);
    $total=$su['total'];
	$res=mysqli_query($conn,$sql);
	?>

	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="img/bg/top.gif">
		<div class="page-info">
			<h2>Orders Page</h2>
			<div class="site-breadcrumb">
				<a href="home.php">Home</a>  /
				<span>Orders</span>
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
						<th class="display">Order Time</th>
                        <th class="display">Order Date</th>
						<th class="display">Payment Time</th>
                        <th class="display">Payment Date</th>
						<th>Progress</th>
						<th>Price</th>
        				</tr>
    				</thead>
					<tbody>
						<?php while($row=mysqli_fetch_assoc($res)){?>
       					 <tr>
								<td><?php echo $row['DID']?></td>
								<td class="smal"><?php echo $row['BRAND']?></td>
								<td><?php echo $row['MODEL']?></td>
								<td class="display"><?php echo $row['OTIME']?></td>
                                <td class="display"><?php echo $row['ODATE']?></td>
								<td class="display"><?php echo $row['PTIME']?></td>
                                <td class="display"><?php echo $row['PDATE']?></td>
                                <td><?php echo $row['PROG']?></td>
								<td><?php echo $row['DPRICE']?></td>
       					 </tr><?php } ?>
                         <tr>
                            <td class="checkout"></td>
                            <td class="checkout"></td>
                            <td class="checkout"></td>
                            <td class="checkout"></td>
                            <td class="checkout"></td>
                            <td class="checkout"></td>
                            <td class="checkout">Total Price:</td>
                            <td class="checkout"><?php echo $total?></td>
                            <td class="checkout"><a class="check" href="./php/checkout.php?ID=<?php echo $id?>">Checkout!</a></td>
                        </tr>
						 
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
