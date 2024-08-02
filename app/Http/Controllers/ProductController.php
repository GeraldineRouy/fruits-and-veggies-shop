<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
         $products = Product::all();
         return view("product-list", ["catalog" => $products]);
    }

    public function show(int $id)
    {
//        return view("product-details", ["id" => $id]);
        $productsById = DB::select('select * from products WHERE id = :id', ['id' => $id]);
        return view("product-details", ['productsById'=>$productsById]);
    }
}
