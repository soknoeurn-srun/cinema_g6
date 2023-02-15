<?php
session_start();
require 'database/database.php';
require 'models/users.model.php';


    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        // variable get post
        $email = $_POST['email'];
        $password = $_POST['password'];
        if(empty($password)) {
            $errors['password'] = 'Please enter a password';
        }
        else if(empty($email)) {
            $errors['email'] = 'Please enter a email';
        }
        else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){  
            $errors['email'] = "Invalid email format";  
        }
        else if (empty($errors)){
            $user = userLogin($email);
            // user login by email
            if(empty($user)){
                $errors['email'] = 'Email not found';
            }else{
                $is_password = password_verify($password, $user['password']);
                if ($email == $user["email"] && ($is_password || $password == $user['password'])){
                    $_SESSION['email'] = $user["email"];
                    $_SESSION['password'] = $user["password"];
                    
                    if($user["user_type"] == 'admin'|| $user["user_type"] == 'user'){
                        $_SESSION['user_type'] = $user["user_type"];
                    }else{
                        $_SESSION['user_type'] = "";
                    }
                    // header('Location:/');
                    if ($user["user_type"] == 'admin' || $user["user_type"] == 'user'){
                        header('location:/');
                    }else{
                        header('location:/seller');
                    }
                }
                else if(!($is_password)){
                    $errors['password'] = 'Your password is not correct';
                }

            }

            // foreach($users as $user){
            // }
        }
    }

require "views/login/login.view.php";