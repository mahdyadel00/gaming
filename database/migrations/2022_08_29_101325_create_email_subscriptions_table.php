<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('email_subscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('email_subscriptions');
    }
}
