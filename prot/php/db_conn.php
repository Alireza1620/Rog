<?php

$sname= "localhost";

$unmae= "root";

$password = "";

$db_name = "21159504";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}