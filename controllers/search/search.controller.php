<?php 
require '../../database/database.php';
require '../../models/searchs.model.php';

if(isset($_POST['query'])){
    $inputText=$_POST['query'];
    $datas=searchText($inputText);

    foreach($datas as $data){
        echo "<li class='list-none bg-black w-64 p-2'><a href='/detail?id=".$data['movie_id']."'>".$data['title']."</a></li>";
    }
}