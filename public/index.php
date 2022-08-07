<?php
session_start();

require_once __DIR__.'/../vendor/autoload.php';


use app\app\core\config\Route;
require_once __DIR__.'/../routes/web.php';
$action = $_SERVER['REQUEST_URI'];
Route::run($action);


