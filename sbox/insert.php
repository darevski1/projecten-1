<?php
    require 'inc/db.php';

    if(isset($_POST['submit'])){

        $user = mysqli_real_escape_string($connection, $_POST['user']);
        $message = mysqli_real_escape_string($connection, $_POST['message']);

        //Set time zone
        date_default_timezone_set('Europe/Sofia');

        $time = date('h:i:s a, time()');
        if(!isset($user) || $user == '' || !isset($message) || $message == ''){
                $error = "Please fill the from";
                header('Location: index.php?error=' .$error);
        }else {
            $query = "INSERT INTO shout(user, message, time) VALUES ('$user', '$message', '$time')";
            if(!mysqli_query($connection, $query)){
                die("Error inserting" . mysqli_error($connection));
            }else{
                header('Location: index.php');
                exit();
            }
        }



    }