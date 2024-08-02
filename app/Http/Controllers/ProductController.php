<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function indexOrderedByName() :View
    {
         $products = Product::orderBy('name')->get();
         return view("product-list", ["catalog" => $products]);
    }
    public function indexOrderedByPrice() :View
    {
         $products = Product::orderBy('price')->get();
         return view("product-list", ["catalog" => $products]);
    }

    public function show(int $id) :View
    {

        $productsById = Product::find($id)->get();
        return view("product-details", ['productsById'=>$productsById]);


    }
}
