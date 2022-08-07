<?php

namespace app\app\core;

class Controller
{
    public function view($path, $array = []){
        if ($array){
            foreach ($array as $key => $item){
                $$key = $item;
            }
        }
        ob_start();
        // If view doesn't exist it displays a custom error template
        if (!file_exists(__DIR__ . "/../../views/$path")) {
            $message = "View doesn't exist";
            renderErrorView(404,'errors/_404_.php', compact('message'));
            exit();
        }
        else {
            require_once __DIR__ . "/../../views/$path";
        }

        return ob_flush();
    }
}