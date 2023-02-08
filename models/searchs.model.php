<?php
function searchText($input){
    global $connection;
    $query = "select title,movie_id from movies where title like '%$input%' ";
    $statement = $connection->prepare($query);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}
