<?php
//database
require "database/database.php";

function getMovie() : array
{
    global $connection;
    $statement = $connection->query("SELECT * FROM movies");
    $movieItems = $statement->fetchAll();
    return $movieItems;
}
