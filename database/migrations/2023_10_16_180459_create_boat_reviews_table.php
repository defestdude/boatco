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
        Schema::create('boat_reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rating');
            $table->text('review_text');
            $table->timestamps();
            $table->unsignedBigInteger('boat');
            $table->unsignedBigInteger('user');

            $table->foreign('boat')->references('id')->on('boats');
            $table->foreign('user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boat_reviews');
    }
};
