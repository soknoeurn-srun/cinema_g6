<?php
session_start();
require 'database/database.php';
require 'models/delete.model.php';


if (isset($_GET['id'])) {
  $id = $_GET['id'];
  deleteMovie($id);
}


header("Location: /movie");