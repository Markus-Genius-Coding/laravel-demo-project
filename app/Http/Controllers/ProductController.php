<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends Controller
{
    public function create(Request $request) {

        $product = new Product();
        $product->title = $request->title;
        $product->description = $request->description;
        $product->save();

        return response()->json(['product' => $product], Response::HTTP_CREATED);
    }

    public function update($id, Request $request) {

        $product = Product::where('id', $id)->first();
        $product->title = $request->title;
        $product->description = $request->description;
        $product->save();

        return response()->json(['product' => $product], Response::HTTP_OK);
    }

    public function getProduct($id) {
        $product = Product::where('id', $id)->first();
        return response()->json(['product' => $product], Response::HTTP_OK);
    }

    public function getAllProducts() {
        $products = Product::all();
        return response()->json(['products' => $products], Response::HTTP_OK);
    }

    public function delete($id) {
        Product::where('id', $id)->delete();
        return response()->json([], Response::HTTP_OK);
    }
}
