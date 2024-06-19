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
        Schema::create('products', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('name');
            $table->integer('price');
            $table->longText('specification');
            $table->longText('description');
            $table->string('photo')->nullable();
            $table->integer('rating')->default(0);
            $table->integer('purchase')->default(0);
            $table->string('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
