<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{

    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_en');
            $table->string('title_ar');
            $table->text('logo');
            $table->string('facebook_link');
            $table->string('twitter_link');
            $table->string('linkedin_link');
            $table->string('youtube_link');
            $table->time('start_from');
            $table->time('end_at');
            $table->string('email');
            $table->integer('phone');
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
