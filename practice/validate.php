<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        $errors = [];

        if(empty($first_name) || empty($last_name)){
            $errors[] = "Please enter your first and last name";
        }
        if(empty($email) || !filter_var($email,FILTER_VALIDATE_EMAIL)){
            $errors[] = "Please enter a valid email address";
        }
        if(strlen($password)<8 || !preg_match('/[A-Z]/',$password) || !preg_match('/[a-z]/',$password) || !preg_match('/[0-9]/',$password) || !preg_match('/[\W]/',$password)){
            $errors[] = "Password must be at least 8 characters long and contain at least one lower case and atleast one uppercase and one special char";
        }
        if($password!==$confirm_password){
            $errors[] = "Passwords do not match";
        }

        if(empty($errors)){
            echo "Form Submitted Successfully <br>";
        }
        else{
            foreach($errors as $error){
                echo $error."<br>";
            }
        }
    }