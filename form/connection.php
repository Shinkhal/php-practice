<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "practice";
    $con = mysqli_connect($host,$user,$password,$db);
    if($con){
        echo "Connected to database <br>";
    }
    else{
        echo "Not connected to database";
    }
?>