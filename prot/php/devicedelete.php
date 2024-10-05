<?php
include "db_conn.php";
$getDid=$_GET['Did'];
$sql="DELETE FROM devices WHERE DID='$getDid';";
$res= mysqli_query($conn,$sql);
header("location: ../admin.php");
?>