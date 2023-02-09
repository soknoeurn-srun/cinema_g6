<?php
//database
require "database/database.php";

function createPost(string $title, string $description) : bool
{
    global $connection;
    $statement = $connection->prepare("INSERT INTO posts (title, description) values (:title, :description)");
    $statement->execute([
        ':title' => $title,
        ':description' => $description

    ]);

    return $statement->rowCount() > 0;
}

function getPost(int $id) : array
{
    global $connection;
    $statement = $connection->prepare("select * from posts where id = :id");
    $statement->execute([':id' => $id]);
    return $statement->fetch();
}


function getPosts() : array
{
    global $connection;
    $statement = $connection->prepare("select * from posts");
    $statement->execute();
    return $statement->fetchAll();
}
function getMovie() : array
{
    global $connection;
    $statement = $connection->query("SELECT * FROM movies");
    $movieItems = $statement->fetchAll();
    return $movieItems;
}
function getLatesMovie() : array
{
    global $connection;
    $statement = $connection->query("SELECT * FROM movies ORDER BY movie_id DESC LIMIT 1");
    return $statement->fetch();
}
function createMovies( string $title) : bool
{
    global $connection;
    $statment = $connection -> prepare("INSERT INTO movies(title) VALUES (:title)");
    // $statment -> execute([
    //     ':title' => $title,
    //     // ':description' => $description,
    //     // ':language' => $language,
    //     // ':releast_date' => $releast_date,
    //     // ':duration' => $duration,
    //     // ':picture' => $picture
    // ]);
    $statment->bindParam(':title', $title);
    return $statment->rowCount() > 0;
}