<?php

namespace app\app\Controllers;

use app\app\core\Controller;
use app\models\Product;
use app\requests\ProductRequest;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return parent::view('index.php', compact('products'));
    }

    public function create()
    {
        return parent::view('create.php');
    }

    public function store(ProductRequest $request)
    {
        $request->validateData('/create');
        Product::create([
            'title' => $request->title,
            'price' => $request->price,
            'description' => $request->description,
        ]);

        redirect('/');
    }

    public function edit($id)
    {
        $products = Product::findOrFail($id);
        if ($products['id'] != $id){
            $message = "Route doesn't exist";
            return renderErrorView(404, 'errors/_404_.php', compact('message'));
        } else {
            return parent::view('edit.php', compact('products'));
        }
    }

    public function update($id, ProductRequest $request)
    {
        $request->validateData("/edit/{$id}");
        Product::update($id, [
           'title' => $request->title,
           'price' => $request->price,
           'description' => $request->description,
        ]);

        redirect("/");
    }

    public function destroy($id)
    {
        Product::delete($id);
        redirect('/');
    }
}