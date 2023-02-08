<?php session_start(); ?>
<?php require "views/partials/head.php" ?>
<?php require "views/partials/nav.php" ?>
<?php require "views/partials/banner.php" ?>
<?php require "database/database.php" ?>

<main class="mx-10 grid grid-cols-5 ">
    <?php 
        global $connection;
        $movies = getNewMovie();
        foreach($movies as $movie) {  
      ?>

      <div class="rounded overflow-hidden shadow-lg bg-black w-64 h-96 mb-10 ">
        <div class="w-full">
            <img class="w-full h-72" src="<?php echo $movie['picture']; ?>" alt="">
        </div>
        <div class="px-6">
          <div class="font-bold text-xl mb-2 text-white"><?php echo $movie['title']; ?></div>
        </div>

        <a href="/movie?id=<?php echo $movie['movie_id'] ?>" class= "flex flex-center justify-between mt-6">
          <button id="button-card"
            class="bg-gradient-to-r via-red-600 to-black text-white w-28 h-8 hover:text-gray-300 text-white ">See More
          </button>
          <img src="https://o.remove.bg/downloads/96535dc2-6beb-48df-ab69-c0c6a8bde377/image-removebg-preview.png" width="40" class= "mr-6 hover:bg-black">
      </a>
      </div>
 <?php
    }
?>     
</main>

<?php require "views/partials/footer.php" ?>
