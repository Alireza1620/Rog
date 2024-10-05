<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>ROG - Login</title>
  <link rel="stylesheet" href="./css/login.css">
  <link href="img/favicon.jpg" rel="shortcut icon"/>
</head>
<body>
<!-- partial:index.partial.html -->
<div id="bg"></div>

<form action="login.php" method="post">


  <div class="form-field">
    <input  type="text" name="uname" placeholder="User Name" required/>
  </div>

  
  <div class="form-field">
    <input  type="password" name="password" placeholder="Password" required/>
  </div>

  <div class="register">
    <p>Dont have an Account? <a href="register.php">Creat One!</a></p>
  </div>
  
  <?php if (isset($_GET['error'])) { ?>

<p class="error"><?php echo $_GET['error']; ?></p>

<?php } ?>

  <div class="form-field">
    <button class="btn" type="submit">login </button>
  </div>
</form>
<!-- partial -->
  













</body>
</html>
