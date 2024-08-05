<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BackofficeController extends Controller
{
    public function show() :View
    {
        return view('backoffice');
    }

    public function indexOrderedByName() :View
    {
        $products = Product::orderBy('name')->get();
        return view("backoffice", ["catalog" => $products]);
    }

    public function create() :View
    {
        return view("create-product");
    }


    public function store(Request $request)
    {
        $products = Product::orderBy('name')->get();

            $product = [
                'name' => $request->input('productName'),
                'price' => $request->input('productPrice'),
                'productWeight' => $request->input('productWeight'),
                'quantity' => $request->input('productQuantity'),
                'productImage' => $request->input('productUrl'),
                'productDescription' => $request->input('productDescription'),
                'fruitOrVeggie' => $request->input('fruitOrVeggie'),
                'organic' => $request->input('organic'),
            ];

        $product = Product::create($product);
        return redirect('/backoffice');
    }


    public function deleteProduct($id)
    {
        $productToDelete = Product::findOrFail($id);
        $productToDelete->delete();
        return redirect('/backoffice');
    }

    public function showProductEdition() :View
    {
        return view('edit-product');
    }

    public function editProduct($product)
    {
        $product = Product::updateOrCreate();
    }



}
