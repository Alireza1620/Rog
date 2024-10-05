<?php
include "db_conn.php";
$email=$_GET['EMAIL'];
$sql="DELETE FROM user WHERE EMAIL='$email';";
$res= mysqli_query($conn,$sql);
header("Location: ../index.php");
?>