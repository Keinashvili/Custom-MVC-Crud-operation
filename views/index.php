<?php
/* @var $products */

//dd(__DIR__);
include_once __DIR__.'/includes/head.php';
?>

<body>
<div class="container mt-20 flex justify-center mx-auto">
    <div class="flex flex-col">
        <a href="/create" class="text-center bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
            Add a product!
        </a>
        <div class="w-full">
            <div class="border-b border-gray-200 shadow">

                <table class="divide-y divide-gray-300 ">
                    <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            ID
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            title
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Description
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Price
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Edit
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Delete
                        </th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-300">
                    <?php foreach ($products as $product) : ?>
                        <tr class="whitespace-nowrap">
                            <td class="px-6 py-4 text-sm text-gray-500">
                                <?= $product->id ?>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    <?= $product->title ?>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-500"><?= $product->description ?></div>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500">
                                <?= $product->price ?>
                            </td>
                            <td class="px-6 py-4">
                                <a href="/edit/<?= $product->id ?>" class="px-4 py-1 text-sm text-blue-600 bg-blue-200 rounded-full">Edit</a>
                                <form id="delete-form" action="/delete/<?= $product->id ?>" class="hidden" method="post"></form>
                            </td>
                            <td class="px-6 py-4">
                                <a href="/delete/<?= $product->id ?>" onclick="event.preventDefault(); document.getElementById('delete-form').submit();" class="px-4 py-1 text-sm text-red-400 bg-red-200 rounded-full">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>