<?php session_start(); ?>
<?php require "views/partials/head.php" ?>
<?php require "views/partials/nav.php" ?>
<?php require "models/contact/contact.model.php" ?>

<form action="/contact" class="mx-5 my-10 bg-black rounded-xl px-4 pt-4 pb-4 mx-80" method="POST">
  
  <div class="rounded-xl text-center border-t-4 border-red-600  py-2 shadow-md mb-10"  role="alert">
    <div class="inline-flex items-center mt-2">
      <h1 class="font-bold px-3 text-white text-2xl ">CONTACT US</h1>
    </div>
  </div>

  <div class="grid md:grid-cols-2 md:gap-6">
    <div class="relative z-0 w-full mb-6 group">
      <input type="text" name="first_name" id="first_name" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-white focus:outline-none focus:ring-0 focus:border-white peer" value="<?php echo isset($_POST['first_name'])? $_POST['first_name'] : "" ?>">
      <label for="first_name" class="pl-6 peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-white peer-focus:dark:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First name</label>
        <svg class="w-5 h-5 dark:text-white peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-white peer-focus:dark:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"></path>
        </svg>
        <span class="<?php echo isset($errors['first_name'])? 'text-red-600' : 'text-black'?> text-sm"><?php echo isset($errors['first_name'])? $errors['first_name'] : "." ?></span>

  </div>

    <div class="relative z-0 w-full mb-6 group">
      <input type="text" name="last_name" id="last_name" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-white focus:outline-none focus:ring-0 focus:border-white peer" value="<?php echo isset($_POST['last_name'])? $_POST['last_name'] : "" ?>">
      <label for="last_name" class="pl-6 peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-white peer-focus:dark:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last name</label>
      <svg class="w-5 h-5 dark:text-white peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-white peer-focus:dark:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z">
        </path>
      </svg>
      <span class="<?php echo isset($errors['last_name'])? 'text-red-600' : 'text-black'?> text-sm"><?php echo isset($errors['last_name'])? $errors['last_name'] : "." ?></span>

    </div>
  </div>

  <div class="relative z-0 w-full mb-2 group">
    <input type="text" name="email" id="email" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-white focus:outline-none focus:ring-0 focus:border-white peer" value="<?php echo isset($_POST['email'])? $_POST['email'] : "" ?>">
    <label for="email" class="pl-6 peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-white peer-focus:dark:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email address</label>
    <svg class="w-5 h-5 dark:text-white peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-white peer-focus:dark:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"></path>
    </svg>
    <span class="<?php echo isset($errors['email'])? 'text-red-600' : 'text-black'?> text-sm"><?php echo isset($errors['email'])? $errors['email'] : "." ?></span>
  </div>

  <div class="relative z-0 w-full mb-2 group">
    <textarea id="message" rows="4" name="massage" class="block mb-4 p-2.5 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-white focus:outline-none focus:ring-0 focus:text-white focus:border-white peer" placeholder="Write your massage here..."></textarea>
  </div>

  <div class="grid text-center md:gap-6">
    <div class="relative z-0 w-full mb-6 group">
      <button name="submit" class="bg-gradient-to-r from-black via-red-600 to-black text-white font-bold hover:text-black text-white py-2 px-40 rounded inline-flex items-center" >
         SAND MASSAGE
      </button>
    </div>
  </div>
  <p class="text-sm font-light text-gray-300">
    You want to sell product you can contact with product owner.
  </p>
  </form>

<?php require "views/partials/footer.php" ?>