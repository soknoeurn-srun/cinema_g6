<?php session_start(); ?>
<?php require "views/partials/head.php" ?>
<?php require "views/partials/nav.php" ?>
<?php if(empty($_SESSION['user_type'])){
  require "views/partials/banner.php";
} ?>

<main class="h-screen">
  <div class="p-3">
    <p>Hello Booking</p>
  </div>
</main>

  <?php require "views/partials/footer.php" ?>
