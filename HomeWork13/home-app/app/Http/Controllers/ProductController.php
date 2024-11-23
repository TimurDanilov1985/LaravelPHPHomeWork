<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index() {
        return Product::all();
    }

    public function show(Product $product) {
        return $product;
    }

    public function store(Request $request) {

        $product = Product::create([
            'sku' => $request->get('sku'),
            'name' => $request->get('name'),
            'price' => $request->get('price'),
        ]);

        return response()->json($product, 201);
    }

    public function update(Request $request, Product $product) {
        $product->update($request->all());
        return response()->json($product, 202);
    }

    public function destroy(Product $product) {
        $product->delete();
        return response()->json([], 204);
    }
}
