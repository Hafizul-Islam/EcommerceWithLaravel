<?php

namespace App;

use App\CategoryProduct;
use App\Product;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $fillable =[
		'CategoryName','slug',
	];
    public function getRouteKeyName()
    {
    	return 'slug';
    }
    public function product()
    {
    	return $this->belongsToMany('App\Product','category_products');
    }
}
 