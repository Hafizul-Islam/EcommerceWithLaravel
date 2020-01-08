<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    
    public function index()
    {
        $subcategory = SubCategory::all();
        return view('Admin.product.viewSubCategory',compact('subcategory'));
    }

    
    public function create()
    {
        return view('Admin.product.subcategory');
    }

   
    public function store(Request $request)
    {
        
        $this->validate($request,[
            'name' => 'required',
            'slug' => 'required'
        ]);
        $subcategory = new SubCategory();
        $subcategory->subCategory = $request->name;
        $subcategory->slug = $request->slug;
        $subcategory->save();
        session()->flash('message','Category insert successfully');
        return redirect()->back();
    }

   
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

  
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
