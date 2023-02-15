<?php 

 require ("database/database.php");

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
    
    // insert data into shows table in database 
    function getToShow(string $startDate, string $endDate, string $format, string $subtitle, int $movieId, int $cinemaId) : bool
    {
        
        global $connection;

        $statement = $connection ->prepare("INSERT INTO shows(start_date,end_date,format,subtitle,movie_id ,cinema_id) VALUES(:start_date,:end_date,:format,:subtitle, :movie_id , :cinema_id)");
        $statement -> execute([
            ':start_date' => $startDate,
            ':end_date' => $endDate,
            ':format' => $format,
            ':subtitle' => $subtitle,
            ':movie_id' => $movieId,
            ':cinema_id' => $cinemaId
        ]);

        $statement = $connection->query("SELECT * FROM movies");
        $result  = $statement ->fetchAll();
        $number = count($result) - 1;
        $movie = $result[$number];
        return $movie['movie_id'];

    }