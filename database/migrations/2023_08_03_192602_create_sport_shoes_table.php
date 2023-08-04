<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
     public function up()
     {
         Schema::create('sport_shoes', function (Blueprint $table) {
             $table->id();
             $table->string('brand');
             $table->string('model');
             $table->integer('size');
             $table->string('color');
             $table->integer('mileage')->default(0);
             $table->timestamps();
         });
     }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sport_shoes');
    }
};
