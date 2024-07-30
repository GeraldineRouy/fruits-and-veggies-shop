<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view("product-list", ["listTitle" => 'Liste des produits']);
    }

    public function show(int $id)
    {
        return view("product-details", ["id" => $id]);
    }//
}
