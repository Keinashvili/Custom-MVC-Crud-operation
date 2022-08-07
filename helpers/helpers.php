<?php

use JetBrains\PhpStorm\NoReturn;

function renderErrorView($code, $path, $array = []): bool
{
    if ($array){
        foreach ($array as $key => $item){
            $$key = $item;
        }
    }
    http_response_code($code);
    ob_start();
    require_once __DIR__ . "/../views/$path";

    return ob_flush();
}

function dd(...$vars){
    foreach ($vars as $var){
        echo '<pre>';
        var_dump($var);
        echo '<pre>';
    }
    exit();
}

function redirect($route){
    header("Location: $route");
}

function error($name) {
    if (key_exists($name, $_SESSION)){
        echo $_SESSION[$name];
    }
}