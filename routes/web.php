<?php

use app\app\controllers\HomeController;
use app\app\core\config\Route;
use app\requests\ProductRequest;

Route::get('/', function (){
    (new HomeController())->index();
});

Route::get('/create', function (){
    (new HomeController())->create();
});

Route::get('/edit/{id}', function ($id){
    (new HomeController())->edit($id);
});

Route::post('/create', function (){
    (new HomeController())->store(new ProductRequest());
});

Route::post('/edit/{id}', function ($id){
    (new HomeController())->update($id,(new ProductRequest()));
});

Route::post('/delete/{id}', function ($id){
    (new HomeController())->destroy($id);
});
