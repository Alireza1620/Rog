<!-- php part -->
<?php
    include "db_conn.php";
    if(isset($_POST['add'])){
        try{
            $img="";
            $id=$_POST['DID'];
            $brand=$_POST['BRAND'];
            $model=$_POST['MODEL'];
            $cpu=$_POST['CPU'];
            $gpu=$_POST['GPU'];
            $price=$_POST['PRICE'];
            $sql="INSERT INTO `devices`(`MODEL`, `BRAND`, `CPU`, `GPU`, `DPRICE`, `DID`,`IMG`) VALUES ('$model','$brand','$cpu','$gpu','$price','$id','$img'); ";
            $res= mysqli_query($conn,$sql);
            header("Location: ../admin.php");
        }catch(Exception $e) {
            header("Location: ../add.php?error="."Try Again!");
          }
        
        
    }?>