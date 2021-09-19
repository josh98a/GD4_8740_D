<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $name = "GD4_8740_D";

    $con = mysqli_connect($host,$user,$pass,$name);

    if(mysqli_connect_errno()){
        echo "Failed to connect MySQL : " . mysqli_connect_error();

    }