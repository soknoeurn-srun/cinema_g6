<?php
require "models\seller\seller.model.php";
$heading = "Seller Page";
// print_r($_SERVER);
if( $_SERVER["PATH_INFO"]=="/seller"){
  require "views/seller/seller.view.php";
}
else if( $_SERVER["PATH_INFO"]=="/form-movie" || $_SERVER["PATH_INFO"] == "/edit"){
  require "views/seller/seller.form.view.php";
}

