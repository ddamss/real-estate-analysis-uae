<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("location");
            $table->integer("page");
            $table->string("image");
            $table->string("type");
            $table->string("bedrooms");
            $table->string("url");
            $table->integer("bathrooms");
            $table->float("sqft",6,3);
            $table->integer("price");
            $table->string("brokerLogo");
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
