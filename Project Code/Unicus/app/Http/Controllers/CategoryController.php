<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showAddCategoryForm(){

        return view('admin.category.add-category');
    }
}
