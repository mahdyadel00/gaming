<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_en');
            $table->string('title_ar');
            $table->string('description_en');
            $table->string('description_ar');
            $table->string('image');
            $table->string('price');
            $table->string('price_discount');


            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->integer('category_id')->unsigned()->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
<<<<<<< HEAD

            // $table->integer('country_id')->unsigned()->nullable();
            // $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
=======
            $table->integer('country_id')->unsigned()->nullable();
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
<<<<<<< HEAD
=======
>>>>>>> ea8405f8e69142278f1c3e5f0692978c6cd61436
>>>>>>> 401fb2e2ad37d79df69a90b24b277603eeddccb5

>>>>>>> 1fc5e7c8ab39e577eab0af8b17fffcca36a3f9bb
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
