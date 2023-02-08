<?php session_start(); ?>
<?php require "views/partials/head.php" ?>
<?php require "views/partials/nav.php" ?>
<?php if(empty($_SESSION['user_type'])){
  require "views/partials/banner.php";
} ?>
<?php require "database/database.php" ?>


<div class="mb-10 grid grid-cols-5 ml-8">
    <?php 
    global $connection;
    $movies = getMovie();
    foreach($movies as $movie) {
        
    ?>
    <div class="bg-black p-3 flex flex-col justify-center mt-8" id="card">
        <div class=" flex justify-center items-center content-div rounded-md">

            <img src="<?php echo $movie['picture']; ?>" alt="" class="ml-8 rounded-md" id="img">
            <div></div>
            <div>
                <div class="w-full image-cover rounded-t-md"></div>
                <div class="py-8 px-4 rounded-b-md fd-cl group-hover:opacity-25">
                    <span class="block text-gray-400 text-sm">
                    </span>
                </div>
            </div>
            <div class="absolute opacity-0 fd-sh group-hover:opacity-90 group-hover:buttom-0">
                <div class="pt-8 text-center flex flex-col items-center ">
                    <a href="/detail?id=<?php echo $movie['movie_id']?>"><button id="button-card"
                        class="text-white font-bold p-2 border-red-600 border-2 text-white text-sm w-30 rounded-md hover:bg-red-600 transition-all">
                        <?php if(empty($_SESSION['user_type'])){echo "See More";}else {if($_SESSION['user_type'] == "admin"){echo "Product Detail";}else{echo "See More";};} ?>
                        </button></a>
                    <a href="https://majorcineplex.com.kh/home"><button id="button-card"
                        class="text-white p-2 border-red-600 border-2 text-white text-sm w-30 mt-5 rounded-md hover:bg-red-600 transition-all">Buy Now
                    </button></a>
                </div>
            </div>
        </div>

        <div class="flex justify-center mt-8">
            <p class="text-white text-sm" id="p">
                <?php echo $movie['title']; ?>
            </p>
        </div>
    </div>





    <?php
    }
?>
</div>

<?php require "views/partials/footer.php" ?>