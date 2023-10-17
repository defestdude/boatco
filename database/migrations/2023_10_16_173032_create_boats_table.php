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
        Schema::create('boats', function (Blueprint $table) {
            $table->id();
            $table->string('boat_name');
            $table->unsignedBigInteger('merchant');
            $table->unsignedBigInteger('category');
            $table->text('description');
            $table->decimal('price',13,2);
            $table->decimal('length',13,2);
            $table->decimal('width',13,2);
            $table->integer('model_year');
            $table->text('comments');
            $table->integer('model');
            $table->integer('city');
            $table->integer('condition');
            $table->timestamps();

            $table->foreign('merchant')->references('id')->on('users');
            $table->foreign('category')->references('id')->on('boat_categories');
            $table->foreign('city')->references('id')->on('cities');
            $table->foreign('model')->references('id')->on('models');
            $table->foreign('condition')->references('id')->on('conditions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boats');
    }
};
