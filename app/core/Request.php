<?php

namespace app\app\core;

use app\traits\Validate;

abstract class Request
{
    use Validate;

    abstract public function rules();

    public function __construct()
    {
        $this->loadData();
    }

    private function loadData(): void
    {
        foreach ($_POST as $itemKey => $itemValue){

            $this->{$itemKey} = $itemValue;
        }
    }
}