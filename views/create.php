<?php
include_once '../views/includes/head.php';
?>
    <body>
    <div class="block p-6 rounded-lg shadow-lg bg-white max-w-md container mt-20 flex justify-center mx-auto">
        <form action="/create" method="post">
            <h1 class="text-center">Add a product!</h1>
            <div class="form-group mb-6">
                <input type="text" name="title" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Title">
                <p style="color: red"><?php error('title'); ?></p>
            </div>
            <div class="form-group mb-6">
                <input type="text" name="price" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"  placeholder="Price">
                <p style="color: red"><?php error('price'); ?></p>
            </div>
            <div class="form-group mb-6">
                <textarea class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlTextarea13" rows="3" name="description" placeholder="Description"></textarea>
                <p style="color: red"><?php error('description'); ?></p>
            </div>
            <button type="submit" class=" w-full px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Add</button>
        </form>
    </div>
    </body>
    </html>
<?php session_destroy(); ?>