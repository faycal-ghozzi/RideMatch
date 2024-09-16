<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->tinyText('make');
            $table->tinyText('model');
            $table->integer('year');
            $table->integer('engine_size');
            $table->integer('horsepower');
            $table->integer('number_of_seats');
            $table->integer('milage');
            $table->foreignId('car_style_id')->constrained('car_styles');
            $table->double('price');
            $table->boolean('availability');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
