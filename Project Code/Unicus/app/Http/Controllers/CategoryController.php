<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showAddCategoryForm(){

        return view('admin.category.add-category');
    }

    public function saveCategoryInfo(Request $request){

        $category = new Category();
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->publication_status = $request->publication_status;
        $category->save();

        return redirect()->route('category.add')->with('message', 'Category Info saved Successfully!');

    }
    public function manageCategory(){
            //$categories = Category::all();
            $categories = Category::orderBy('id', 'asc')->get();
            return view('admin.category.manage-category', ['categories' => $categories]);

    }

    public function editCategory($id){
        $category = Category::find($id);
        return view('admin.category.edit-category', ['category' => $category]);
    }

    public function updateCategory(Request $request){
        $categoryById = Category::find($request->category_id);
        $categoryById->category_name = $request->category_name;
        $categoryById->category_description = $request->category_description;
        $categoryById->publication_status = $request->publication_status;
        $categoryById->save();

        return redirect('/category/manage-category')->with('message', 'Category info update successfully.');
    }

    public function deleteCategory($id){
        $categoryById = Category::find($id);
        $categoryById->delete();
        return redirect('/category/manage-category')->with('message', 'Category info delete successfully.');
    }


}
