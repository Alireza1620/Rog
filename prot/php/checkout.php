<?php
include "db_conn.php";
$getid=$_GET['ID'];
$PTIME=date("H:i:s");
$PDATE=date("Y-m-d");
$sql="UPDATE `order` SET PROG='Purchased',PTIME='$PTIME',PDATE='$PDATE' WHERE PROG='Pending' AND `UID`='$getid'";
$res=mysqli_query($conn,$sql);
header("Location: ../order.php");
?>
