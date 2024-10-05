<?php
try{
    $getid=$_GET['Did'];
    include "db_conn.php";
    $brand=$_POST['BRAND'];
    $model=$_POST['MODEL'];
    $cpu=$_POST['CPU'];
    $gpu=$_POST['GPU'];
    $price=$_POST['PRICE'];
    $sql="UPDATE `devices` SET DID=$getid,BRAND='$brand',MODEL='$model',CPU='$cpu',GPU='$gpu',DPRICE='$price' WHERE DID=$getid";
    $res= mysqli_query($conn,$sql);
    header("Location: ../admin.php");
}catch(Exception $e) {
    header("Location: ../editdevice.php?Did=".$getid." & error="."Try Again!");
  }

if($res){
    
}else{
    
}
?>