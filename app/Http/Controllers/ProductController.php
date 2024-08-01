<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
//    public $productList = [1,2,3,4,5,6,7,8,9,10];
    public function index()
    {
        $products = DB::select('select * from products');
        return view("product-list",['catalog'=>$products]);
//        return view("product-list", ["listTitle" => $this->productList]);
    }

    public function show(int $id)
    {
//        return view("product-details", ["id" => $id]);
        $productsById = DB::select('select * from products WHERE id = :id', ['id' => $id]);
        return view("product-details", ['productsById'=>$productsById]);
    }
}
