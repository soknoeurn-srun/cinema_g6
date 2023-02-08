<?php

function deleteMovie(int $id)
{
    global $connection;
    $statement = $connection->prepare("delete from movies where movie_id = :id ");
    $statement->execute([':id' => $id]);
    return $statement->rowCount() > 0;
}

