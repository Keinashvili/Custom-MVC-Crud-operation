<?php

namespace app\requests;

use app\app\core\Request;

class ProductRequest extends Request
{
    public function rules()
    {
        return [
            'title' => 'required',
            'price' => 'required',
            'description' => 'required',
        ];
    }
}