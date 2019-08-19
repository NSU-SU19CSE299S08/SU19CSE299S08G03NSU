<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct(){
        $publishedCategories = Category::where('publication_status', 1)->get();
        return view('admin.product.add-product' ,[
            'publishedCategories' => $publishedCategories
            ]);
    }

    public function manageProduct(){
        $product = Product::orderBy('id', 'asc')->get();
        return view('admin.product.manage-product', [
            'products' => $product
        ]);
    }

    public function unpublishedProduct($id){
        $unpublishedProductById = Product::find($id);
        $unpublishedProductById->publication_status= 0;
        $unpublishedProductById->save();

        return redirect('/product/manage-product')->with('message','Product Unpublished Successfully!');
    }
}
