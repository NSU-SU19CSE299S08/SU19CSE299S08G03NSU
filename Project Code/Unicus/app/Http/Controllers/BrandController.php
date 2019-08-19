<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function ShowAddBrandForm(){
        return view('brand.add-brand');
    }

    public function saveBrandInfo(Request $request){
        $brand = new Brand();
        $brand->brand_name = $request->brand_name;
        $brand->brand_description = $request->brand_description;
        $brand->publication_status = $request->publication_status;
        $brand->save();

        return redirect('/brand/add-brand')->with('message', 'Brand info save successfully.');
    }

    public function manageBrandInfo(){
        $brands = Brand::orderBy('id', 'desc')->get();

        return view('admin.brand.manage-brand', ['brands' => $brands]);
    }

    public function editBrandInfo($id){

            $brand = Brand::find($id);
            return view('admin/brand/edit-brand', ['brand' => $brand]);
    }

    public function updateBrandInfo(Request $request){
        $brandById = Brand::find($request->brand_id);
        $brandById->brand_name = $request->brand_name;
        $brandById->brand_description = $request->brand_description;
        $brandById->publication_status = $request->publication_status;
        $brandById->save();

        return redirect('/brand/manage-brand')->with('message', 'Brand info update successfully.');
    }

    public function deleteBrand($id){
        $brandById = Brand::find($id);
        $brandById->delete();

        return redirect('/brand/manage-brand')->with('message', 'Brand info delete successfully.');
    }
}
