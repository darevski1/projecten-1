<?php 

    $host = "localhost";
    $db = "shouts";
    $user = "root";
    $pass = "";



    $connection  = mysqli_connect($host,  $user, $pass, $db);

    if(!$connection){
     
        echo "Error" . mysqli_connect_errno();
    }