<?php 

session_start(); 

include "./php/db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate(strtoupper($_POST['uname']));

    $pass = validate($_POST['password']);

    if (empty($uname)) {

        header("Location: index.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: index.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM user WHERE EMAIL='$uname' AND PASSWD='$pass'";

        $result = mysqli_query($conn, $sql);

        $asql= "SELECT * FROM admino WHERE EMAIL='$uname' AND PASSWD='$pass'";

        $res= mysqli_query($conn,$asql);
        if (mysqli_num_rows($res)>0){

            $row = mysqli_fetch_assoc($res);

            if ($row['EMAIL'] === $uname && $row['PASSWD'] === $pass) {

                $_SESSION['logged']=true;
                
                $_SESSION['admin']= true;

                $_SESSION['EMAIL'] = $row['EMAIL'];

                $_SESSION['FNAME'] = $row['FNAME'];

                $_SESSION['LNAME'] = $row['LNAME'];

                $_SESSION['UID'] = $row['UID'];

                header("Location: home.php");

                exit();

            }else{

                header("Location: index.php?error=Incorect User name or password");
                $_SESSION['logged']=false;

                exit();

            }

        }else if (mysqli_num_rows($result)  > 0) {

            $row = mysqli_fetch_assoc($result);

            if ($row['EMAIL'] === $uname && $row['PASSWD'] === $pass) {

                $_SESSION['logged']=true;

                $_SESSION['EMAIL'] = $row['EMAIL'];

                $_SESSION['FNAME'] = $row['FNAME'];

                $_SESSION['LNAME'] = $row['LNAME'];
                
                $_SESSION['UID'] = $row['UID'];

                header("Location: home.php");

                exit();

            }else{

                header("Location: index.php?error=Incorect User name or password");
                $_SESSION['logged']=false;

                exit();

            }

        }else{

            header("Location: index.php?error=Incorect User name or password");
            $_SESSION['logged']=false;

            exit();

        }

    }

}else{

    header("Location: index.php");

    exit();

}