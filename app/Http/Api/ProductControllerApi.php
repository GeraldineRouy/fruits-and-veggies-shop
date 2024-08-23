<?php

namespace App\Http\Api;

use App\Http\Resources\Product as ResourcesProduct;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductControllerApi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ResourcesProduct::collection(Product::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (Product::create($request->all())) {
            return response()->json([
                'success' => 'Nouveau produit créé avec succès'
            ], 200);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return new ResourcesProduct($product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        if ($product->update($request->all())) {
            return response()->json([
                'success' => 'Produit modifié avec succès'
            ], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if ($product->delete()) {
            return response()->json([
                'success' => 'Produit effacé avec succès'
            ], 200);
        }
    }
}
