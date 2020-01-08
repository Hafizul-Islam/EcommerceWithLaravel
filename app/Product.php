<?php

namespace App;

use App\Category;
use App\CategoryProduct;
use App\SubCategory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category()
    {
        return $this->belongsToMany('App\Category','category_products');
    }

    public function subcategory()
    {
        return $this->belongsToMany('App\SubCategory','category_sub_categories');
    }

    public function colour()
    {
        return $this->belongsToMany('App\Colour','colour_products');
    }
}
