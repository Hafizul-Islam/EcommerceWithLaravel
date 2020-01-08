<?php

namespace App\Http\Controllers\Admin\Product;

use App\Category;
use App\CategorySubCategory;
use App\Colour;
use App\Http\Controllers\Controller;
use App\Image;
use App\Product;
use App\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $image = Image::latest()->get();
        return view('Admin.product.viewProduct',compact('image'));
        
    }

    public function create()
    {
        
        $category = Category::all();
        $subcategory = SubCategory::all();
        $colour = Colour::all();
        
        return view('Admin.product.createProduct',compact('category','subcategory','colour'));
    }

   
    public function store(Request $request)
    {


        $data =  $this->validate($request,[
            'name' =>'required',
            'prize' =>'required',
            'code' =>'required',
            'size' => 'required',
            'description' =>'required',
            'category' =>'required',
            'subcategory' =>'required',
            'colour' =>'required'
            
        ]);

        
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->size = $request->size;
        $product->productPrice = $request->prize;
        $product->code = $request->code;

        
        $product->save();

        $product->category()->sync($request->category);
        $product->subcategory()->sync($request->subcategory);
        $product->colour()->sync($request->colour);

        
        
        if($request->hasfile('image'))
        {
            foreach($request->file('image') as $image)
            {
                $imagetable = new Image();
                $image_name = str_random(20);
                $ext = strtolower($image->getClientOriginalName());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'image/';
                $image_url = $upload_path.$image_full_name;
                $success = $image->move($upload_path,$image_full_name);
                $imagetable->image = $image_url;

                $imagetable->product_id = $product->id;

                $imagetable->save();
            }
         }

        session()->flash('message','Post insert successfully');
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
