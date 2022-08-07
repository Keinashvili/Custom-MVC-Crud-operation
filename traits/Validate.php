<?php

namespace app\traits;

trait Validate
{
    public function validateData($path):void
    {
        $validated = $this->rules();

        $errors = [];

        foreach ($validated as $key => $value){
            if (!property_exists($this, $key)){
                $_SESSION[$key] = $key . ' doesn\'t exist';
                exit();
            }
            if ($value === 'required' && strlen($this->{$key}) < 1){
                $errors[$key] = $key;
                $_SESSION[$key] = $key . ' is required';
            }
        }

        if ($errors){
            redirect($path);
        }
    }
}