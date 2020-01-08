<?php

namespace App\Http\Controllers\Frontend;

use App\Cartlist;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
   
    public function index()
    {
        //
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $cartlist = new Cartlist();

        $cartlist->product_id=$request->id;
        $cartlist->user_id = 2;
        $cartlist->size = $request->size;
        $cartlist->count = $request->count;

        $cartlist->save();
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
