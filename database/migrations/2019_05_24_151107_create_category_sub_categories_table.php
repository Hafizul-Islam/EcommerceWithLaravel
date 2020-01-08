<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategorySubCategoriesTable extends Migration
{
   
    public function up()
    {
        Schema::create('category_sub_categories', function (Blueprint $table) {
            $table->integer('product_id');
            $table->integer('sub_category_id');

        });
    }

   
    public function down()
    {
        Schema::dropIfExists('category_sub_categories');
    }
}
