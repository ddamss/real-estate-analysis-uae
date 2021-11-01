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
            $table->string("image")->nullable();
            $table->string("type");
            $table->string("bedrooms");
            $table->string("url");
            $table->string("bathrooms");
            $table->integer("sqft");
            $table->integer("price");
            $table->string("brokerLogo")->nullable();
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
