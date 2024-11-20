<?php
    $host ="localhost";
    $user ="root";
    $pass ="";
    $db_name = "chathi_maiya";
    $con = mysqli_connect($host,$user,$pass,$db_name);
    if($con){
        echo "<h1>Chathi maiya ki jai</h1>";
    }
    else{
        echo "Failed";
    }
?>