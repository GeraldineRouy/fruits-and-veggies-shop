<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    public function indexOrderedByName()
    {
         $products = Product::orderBy('name')->get();
         return view("product-list", ["catalog" => $products]);
    }
    public function indexOrderedByPrice()
    {
         $products = Product::orderBy('price')->get();
         return view("product-list", ["catalog" => $products]);
    }

    public function show(int $id)
    {

        $productsById = Product::where('id',$id)->get();
        return view("product-details", ['productsById'=>$productsById]);


    }
}
