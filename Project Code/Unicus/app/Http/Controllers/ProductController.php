<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct(){

        return view('admin.product.add-product');
    }

    public function manageProduct(){
        $product = Product::orderBy('id', 'asc')->get();
        return view('admin.product.manage-product', [
            'products' => $product
        ]);
    }
}
