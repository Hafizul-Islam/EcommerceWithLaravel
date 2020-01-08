<?php

namespace App\Http\Controllers\Admin\Product;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function index()
    {
        $category = Category::latest()->get();
        

        return view('Admin.product.viewCategory',compact('category'));
    }

    
    public function create()
    {
        return view('Admin.product.category');
    }

    
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'slug' => 'required'
        ]);

        $category = new Category();
        $category->CategoryName = $request->name;
        $category->slug = $request->slug;
        $category->save();
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
