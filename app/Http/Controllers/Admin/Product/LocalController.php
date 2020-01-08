<?php

namespace App\Http\Controllers\Admin\Product;

use App\Category;
use App\Colour;
use App\Http\Controllers\Controller;
use App\SubCategory;
use Illuminate\Http\Request;

class LocalController extends Controller
{
    public function alltable()
    {
    	$category = Category::paginate(3);
    	$subcategory = SubCategory::paginate(3);
    	$colour = Colour::paginate(3);

    	return view('Admin.product.tableAll',compact('category','subcategory','colour'));
    }
}
