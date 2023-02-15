<?php 
// require "models/detail.model.php";
$id = '';
if (isset($_GET['id'])) 
{
  print_r($id);
  $id = $_GET['id'];
  if (isset($_POST['edit']))
  {
    $item = getMovieItem($id);
  }
}
