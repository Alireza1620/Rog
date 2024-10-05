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


<?php include_once "header.php";?>

<?php $getid=$_GET['Did'];?>
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
            <h1>Editing Device ID: <?php echo $getid ?></h1>
        <div class="cont-info">

        <form action="./php/edit.php?Did=<?php echo $getid?>" method="post">


         <div class="form-field">
         <label>Model :</label>
              <input  type="text" name="MODEL" placeholder="Model" required/>
         </div>
         <div class="form-field">
         <label>Brand :</label>
            <input  type="text" name="BRAND" placeholder="Brand" required/>
         </div>
         <div class="form-field">
         <label>CPU :</label>
           <input  type="text" name="CPU" placeholder="CPU" required/>
         </div>
        <div class="form-field">
        <label>GPU :</label>
          <input  type="text" name="GPU" placeholder="GPU" required/>
        </div>
        <div class="form-field">
        <label>Price :</label>
          <input  type="text" name="PRICE" placeholder="Price" required/>
        </div>

        <?php if (isset($_GET['error'])) { ?>

<p class="error"><?php echo $_GET['error']; ?></p>

<?php } ?>
        <div class="form-field">
             <button name="upde" class="btn" type="submit">Update Device </button>
         </div>




        </div>
        </form>
        </div>
		</div>
	</section>
	<!-- Admin page end-->

    <!-- php part -->



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
