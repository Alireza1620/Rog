<?php
include "db_conn.php";


$uid=$_GET['UID'];
$deid=$_GET['DID'];
$OTIME=date("H:i:s");
$ODATE=date("Y-m-d");
$prog="Pending";


$sql="SELECT DPRICE FROM devices WHERE DID='$deid';";
$rs=mysqli_query($conn,$sql);
$row= mysqli_fetch_array($rs);
$price=$row['DPRICE'];

$orsql="INSERT INTO `order`(`UID`, `PTIME`, `PDATE`, `OTIME`, `ODATE`, `PROG`, `DVCID`, `PRICE`) VALUES ('$uid','$OTIME','$ODATE','$OTIME','$ODATE','$prog','$deid','$price')";
$orres=mysqli_query($conn,$orsql);
header("Location: ../order.php");
?>
