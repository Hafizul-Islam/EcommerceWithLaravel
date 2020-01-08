<?php

namespace App\Http\Controllers\Frontend;

use App\Cartlist;
use App\Category;
use App\Http\Controllers\Controller;
use App\Image;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function ViewCategory()
    {
    	$cartlist = Cartlist::get()->all();
    	$category = Category::get()->all();
    	$image = Image::get()->all();
    	$Cartproduct = Product::get()->all();
    	

    	return view('index',compact('image','category','cartlist','Cartproduct'));
    }
    public function shop()
    {
    	$category = Category::get()->all();
    	$image = Image::get()->all();
    	$product = Category::find(2)->product;

    	$Cartproduct = Product::get()->all();
    	$cartlist = Cartlist::get()->all();
    	//return view('just',compact('image'));
    	return view('Frontend.product.shop',compact('image','category','product','cartlist','Cartproduct'));
    	
    }
    public function categoryShop(Category $cat)
    {
    	$image = Image::get()->all();
    	$product = $cat->product;
    	$category = Category::get()->all();

    	$Cartproduct = Product::get()->all();
    	$cartlist = Cartlist::get()->all();
    	
    	return view('Frontend.product.shop',compact('image','category','product','cartlist','Cartproduct'));
    }
    public function singleShop(Product $singleProduct)
    {
    	$image = Image::get()->all();

    	$Cartproduct = Product::get()->all();
    	$cartlist = Cartlist::get()->all();

    	return view('Frontend.product.singleShop',compact('singleProduct','image','cartlist','Cartproduct'));
    }

    public function cartView()
    {
    	$image = Image::get()->all();

    	$Cartproduct = Product::get()->all();
    	$cartlist = Cartlist::get()->all();
    	return view('Frontend.product.myCart',compact('cartlist','image','Cartproduct'));
    }
}
