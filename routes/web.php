<?php



Route::get('/', function () {
    return view('Frontend.product.singleShop');
});

Route::group(['namespace'=>'Admin'],function()
{
Route::group(['namespace'=>'Product'],function()
{
	Route::resource('/backend/category','CategoryController');	
	Route::resource('/backend/subcategory','SubCategoryController');
	Route::resource('/backend/colour','ColourController');
	Route::resource('/backend/product','ProductController');

	Route::get('/backend/table','LocalController@alltable');

});

});


Route::group(['namespace'=>'Frontend'],function()
{
	Route::get('/home','ProductController@ViewCategory');
	Route::get('/shop','ProductController@shop');
	Route::get('/shop/{cat?}','ProductController@categoryShop')->name('cat');
	Route::get('/singleview/{singleProduct?}','ProductController@singleShop')->name('singleProduct');

	Route::get('/mycartview','ProductController@cartView');

	Route::resource('/singleview/addtocart','CartController');
});




