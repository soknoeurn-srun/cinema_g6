<?php
require "models/movie.model.php";

if(empty($_POST['title'])){
    header("Location: /create-seller");
} 
else{
    $title = $_POST['title'];
    $description = $_POST['description'];
    $language = $_POST['language'];
    $duration = $_POST['duration'];
    $release_date = $_POST['release_date'];
    $image = $_POST['image'];
    // show table
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];
    $format = $_POST['format'];
    $subtitle = $_POST['subtitle'];
    $createSeller  = createMovies($title, $description, $language, $duration, $release_date, $image);
    // $createSellers  = getLatesMovie();
    print_r($createSeller);
}

// require "views/seller/seller.view.php";
$heading = "List Seller Page";

?>

