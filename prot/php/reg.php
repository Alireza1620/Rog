<?php
include "db_conn.php";

    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $uname=$_POST['uname'];
    $email=strtoupper($_POST['email']);
    $pnum=$_POST['pnumber'];
    $address=$_POST['address'];
    $pass=$_POST['passwd'];
    $cpass=$_POST['conpasswd'];
    if($pass === $cpass){
        $sql="INSERT INTO `user`(`PNUM`, `LNAME`, `FNAME`, `ADDRESS`, `EMAIL`, `UNAME`, `PASSWD`) VALUES ('$pnum','$lname','$fname','$address','$email','$uname','$pass');";
        $res=mysqli_query($conn,$sql);
        if($res){
          header("Location: ../index.php");
        }else{
          header("Location: ../register.php?error= Something went Wrong try again!");
        }
        
    }else{
        header("Location: ../register.php?error= Passwords are not match!");
    }

?>