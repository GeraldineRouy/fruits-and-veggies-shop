<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $productList = ["A", "B", "C","A", "B", "C"];
    public function index()
    {
        return view("product-list", ["listTitle" => $this->productList]);
    }

    public function show(int $id)
    {
        return view("product-details", ["id" => $id]);
    }//
}
