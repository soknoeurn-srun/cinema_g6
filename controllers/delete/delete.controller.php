<?php
session_start();
require 'database/database.php';
require 'models/delete.model.php';
// require 'seller.view.php';


if (isset($_GET['id'])) {
  $id = $_GET['id'];
  deleteMovie($id);
}

if ($user["user_type"] == 'admin'){
  header('location:/movie');
}else{
  header('location:/seller');
}