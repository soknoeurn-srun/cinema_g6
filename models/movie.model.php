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
