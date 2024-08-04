<?php

namespace App\Http\Controllers;

use App\Models\Product;
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

    public function showProductCreation() :View
    {
        return view("create-product");
    }

    public function createProduct($newProductName)
    {
        $newProduct = Product::create(['name'=>$newProductName]);
    }

    public function showProductErasure() :View
    {
        return view('delete-product');
    }

    public function deleteProduct($productIdToDelete)
    {
        $productIdToDelete = Product::destroy($productIdToDelete);
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
