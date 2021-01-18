<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;

class ProductController extends Controller
{
    public function addProduct(Request $request){
        $product = new ProductModel();
        $product->productName = $request->productName;
        $product->quantity = $request->quantity;
        $product->amount = $request->amount;
        $product->formFile = $request->formFile;
        $product->productDescription = $request->productDescription;
        $product->save();
        return $product->get();
    }

    public function getProduct(){
        $product = new ProductModel();
        return $product->get();
    }

    public function productCount(){
        $product = new ProductModel();
        return $product->count();
    }
}
