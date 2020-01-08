<?php

namespace App\Http\Controllers\Admin\Product;

use App\Colour;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ColourController extends Controller
{
    
    public function index()
    {
        $colour = Colour::all();
        return view('Admin.product.viewColour',compact('colour'));
    }

    
    public function create()
    {
        return view('Admin.product.colour');
    }

   
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'slug' => 'required'
        ]);

        $colour = new Colour();
        $colour->name = $request->name;
        $colour->slug = $request->slug;

        $colour->save();
        session()->flash('message','colour insert successfully');
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
