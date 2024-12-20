<?php
require "config.php";

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
if($con){
    echo "<script>console.log('Connected to database');</script>";
}
else{
    die("Connection failed" . mysqli_connect_error());
}
