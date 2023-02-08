<?php
session_start();
require 'database/database.php';
require 'models/users.model.php';

    // variable get post
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        // variable get post
        $email = $_POST['email'];
        $password = $_POST['password'];
        if(empty($password)) {
            $errors['password'] = 'Please enter a password';
        }
        if(empty($email)) {
            $errors['email'] = 'Please enter a email';
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){  
            $errors['email'] = "Invalid email format";  
        }
        if (empty($errors)){
            $users = getUser();
            foreach($users as $user){
                $is_password = password_verify($password, $user['password']);
                if ($email == $user["email"] && ($is_password || $password == $user['password'])){
                    $_SESSION['email'] = $user["email"];
                    $_SESSION['password'] = $user["password"];
                    header('Location:/');

                    if($user["user_type"] == 'admin'){
                        $_SESSION['user_type'] = $user["user_type"];
                    }
                }
                else if(!($is_password)){
                    $errors['password'] = 'Your password is not correct';
                }
            }
        }
}

require "views/login/login.view.php";