<?php
    function getNewMovie() : array
    {
        global $connection;
        $statement = $connection->query("SELECT * FROM movies ORDER BY  movie_id  DESC LIMIT 10");
        $movieItems = $statement->fetchAll();
        return $movieItems;
    }
?>