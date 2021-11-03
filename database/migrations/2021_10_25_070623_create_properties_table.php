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
            $table->string("title")->nullable();
            $table->string("location")->nullable();
            $table->integer("page")->nullable();
            $table->string("image")->nullable();
            $table->string("type")->nullable();
            $table->string("bedrooms")->nullable();
            $table->string("url")->nullable();
            $table->string("bathrooms")->nullable();
            $table->integer("sqft")->nullable();
            $table->integer("price")->nullable();
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
