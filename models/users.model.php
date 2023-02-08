<?php 
function createUser(string $firstName, string $lastName, string $email, string $password, string $user_types) : bool
{
    global $connection;
    $password_hash = password_hash($password, PASSWORD_BCRYPT);
    $statment = $connection -> prepare("INSERT INTO users(first_name,last_name,email,passwords,user_type) VALUES (:first_name,:last_name,:email,:passwords,:user_type)");
    $statment -> execute([
        ':first_name' => $firstName,
        ':last_name' => $lastName,
        ':email' => $email,
        ':passwords' => $password_hash,
        ':user_type' => $user_types
    ]);
    return $statment->rowCount() > 0;
}

function getUser() : array
{
    global $connection;
    $statement = $connection -> prepare('select * from users');
    $statement -> execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}
function newMovie() : array
{
    global $connection;
    $statement = $connection -> prepare('select * from movies desc limit 10');
    $statement -> execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}
