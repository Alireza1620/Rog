<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>ROG - Register</title>
  <link rel="stylesheet" href="./css/register.css">
  <link href="img/favicon.jpg" rel="shortcut icon"/>
</head>
<body>
<!-- partial:index.partial.html -->
<div id="bg"></div>

<form action="./php/reg.php" method="post">


  <div class="form-field">
    <input  type="text" name="fname" placeholder="First Name" required/>
  </div>

  
  <div class="form-field">
    <input  type="text" name="lname" placeholder="Last Name" required/>
  </div>
  
  <div class="form-field">
    <input  type="text" name="uname" placeholder="User Name" required/>
  </div>

  <div class="form-field">
    <input  type="text" name="email" placeholder="Email" required/>
  </div>

  <div class="form-field">
    <input  type="text" name="pnumber" placeholder="Phone Number" required/>
  </div>


  <div class="form-field">
    <input  type="text" name="address" placeholder="Address" required/>
  </div>

  <div class="form-field">
    <input  type="password" name="passwd" placeholder="Password" required/>
  </div>
  
  <div class="form-field">
    <input  type="password" name="conpasswd" placeholder="Confirm Password" required/>
  </div>

  <?php if (isset($_GET['error'])) { ?>

<p class="error"><?php echo $_GET['error']; ?></p>

<?php } ?>

  <div class="form-field">
    <button name="register" class="btn" type="submit">Register! </button>
  </div>

  <div class="register">
    <p>Have an Account? <a href="index.php">Login!</a></p>
  </div>
</form>



</body>
</html>
