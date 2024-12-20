<?php
    $email = "xyz@123";

    $pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
    // if (preg_match($pattern, $email)){
    //     echo "Email is valid";
    // }
    // else{
    //     echo "Email is not valid";
    // }
        if(filter_var($email,FILTER_VALIDATE_EMAIL)){
            echo "Email is valid";
        }
        else{
            echo "Email is not valid";
        }
?>