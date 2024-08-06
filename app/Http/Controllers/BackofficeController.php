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

        request()->validate([
                'productName' => 'required|min:5|max:250',
                'productQuantity' => 'required|numeric|min : 0',
                'productPrice' => 'numeric|min : 0'
            ]
        );

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

       Product::create($product);
        return redirect('/backoffice');
    }


    public function deleteProduct($id)
    {
        $productToDelete = Product::findOrFail($id);
        $productToDelete->delete();
        return redirect('/backoffice');
    }

    public function showProductEdition(int $id) :View
    {
        $product = Product::findOrFail($id);
        return view('edit-product', ['product'=>$product]);
    }

    public function editProduct(Request $request,int $id)
    {
        request()->validate([
                'productName' => 'required|min:5|max:250',
                'productQuantity' => 'required|numeric|min : 0',
                'productPrice' => 'numeric|min : 0'
            ]
        );

        $product = Product::findOrFail($id);

        $product->update(
            [
                'name' => $request->input('productName'),
                'price' => $request->input('productPrice'),
                'productWeight' => $request->input('productWeight'),
                'quantity' => $request->input('productQuantity'),
                'productImage' => $request->input('productUrl'),
                'productDescription' => $request->input('productDescription'),
                'fruitOrVeggie' => $request->input('fruitOrVeggie'),
                'organic' => $request->input('organic'),
            ]
        );


        return redirect('/backoffice');
    }



}
