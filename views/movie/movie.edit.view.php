<?php 

require "views/partials/head.php";
require "views/partials/nav.php";
require "models/movies/movie.edit.model.php";
require "models/detail.model.php";
?>

<div class="mx-96 mt-8">
    <form action="/create" class="bg-black shadow-md rounded px-8 pt-6 pb-8 mb-4" method="post">
        <p class="text-center text-red-700 text-lg font-bold">CREATE MOVIE</p>
            <div class="mb-4">
                <label class="block text-red-700" for="title">Movie Title</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="title" name="title" value="<?php echo $item['title'] ?>">
            </div>

            <div class="mb-4">
                <label class="block text-red-700" for="description">Description</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="description" name="description" value="<?php echo $item['description'] ?>">
            </div>

            <div class="mb-4">
                <label class="block text-red-700" for="language" name="language">Choose a language:</label>
                <select name="language" id="language" class=" w-full py-2 px-3 border rounded">
                    <option value="khmer" name="khemr">khmer</option>
                    <option value="english" name="english">English</option>
                    <option value="korean" name="korean">Korean</option>
                </select>
            </div>
            <div class="mb-4 text-red-700">             
                <label class="block text-red-700" for="duration" name="duration">Duration : </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Movie Duration" name="duration">

            </div>

            <div class="mb-4">
                <label class="block text-red-700" for="releastDate">Release date</label>
                <div class="relative max-w-sm">
                    <div class=" absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="false" class=" w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                    </div>
                    <input datepicker type="text" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date" id="date" name="releast_date" value="<?php echo $item['releast_date'] ?>">
                </div>
            </div>

            <div class="mb-4">
                <label class="block text-red-700" for="picture">Image</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Image URL" name="picture">
            </div>
            
            <div class="mb-4">
                <label class="block text-red-700" for="image">Start Date</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Input Movie Start Date" name="start_date">
            </div>

            <div class="mb-4">
                <label class="block text-red-700" for="image">End Date</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Input Movie End Date" name="end_date">
            </div>

            <div class="mb-4">
                <label class="block text-red-700" for="image">Format</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Input Format(Ex: 2D,..)" name="format">
            </div>

            <div class="mb-4 text-white ">           
                <label class="block text-red-700" for="subtitle" name="subtitle">Subtitle:</label>
                <div class="text-sm flex gap-4">
                
                    <input type="radio" id="vehicle1" name="subtitle" value="English" checked="checked">
                    <label for="vehicle1"> English </label><br>
                    <input type="radio" id="vehicle2" name="subtitle" value="Franch">
                    <label for="vehicle2">  Franch</label><br>
                    <input type="radio" id="vehicle3" name="subtitle" value="Chinese">
                    <label for="vehicle3"> Chinese </label>
                </div>
            </div>

            <div class="flex items-center justify-between">
            <div class="flex items-center justify-between">
                    <a href="/seller"><button class="ront-bold bg-gradient-to-r from-black via-gray-600 to-black hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                        Cancel
                    </button></a>
                <button class="ront-bold bg-gradient-to-r from-black via-red-600 to-black hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" name="create">
                    Create
                </button>           
            </div>
        </form>
        
    </div>
</div>

<?php require "views/partials/footer.php"; ?>