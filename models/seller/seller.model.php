<?php
    require "database/database.php";
    function createMovie(string $title, string $description, string $language , string $releastDate, string $duration , string $picture ) : bool
    {
        global $connection;
        $statement = $connection->prepare("INSERT INTO movies(title, description,language, releast_date, duration,picture) VALUES (:title, :description,:language,:releastDate,:duration,:picture)");
        $statement->execute([
            ':title' => $title,
            ':description' => $description,
            'language' => $language,
            ':releastDate' => $releastDate,
            ':duration' => $duration,
            ':picture' => $picture

        ]);
        return $statement->rowCount() > 0;
    }
    function updateMovie(string $title, string $description, string $language , string $releastDate, string $duration , string $picture, int $movie_id)
    {
        global $connection;
        $statement = $connection->prepare("UPDATE movies SET title=:title, description=:description,language=:language, releast_date=:releast_date, duration=:duration,picture=:picture WHERE movie_id=:movie_id");
        $statement->execute([
            ':title' => $title,
            ':description' => $description,
            'language' => $language,
            ':releast_date' => $releastDate,
            ':duration' => $duration,
            ':picture' => $picture,
            ':movie_id' => $movie_id

        ]);

    }
    

