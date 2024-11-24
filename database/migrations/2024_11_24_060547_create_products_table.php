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
            $table->id();
            $table->string('name');
            $table->integer('category_id');
            $table->text('long_desc')->nullable();
            $table->text('short_desc')->nullable();
            $table->string('seo_title')->nullable();
            $table->string('keywords')->nullable();
            $table->text('seo_desc')->nullable();
            $table->string('tags')->nullable();
            $table->text('products_assets')->nullable();
            $table->integer('view_count');
            $table->integer('status')->default(1);
            $table->timestamps();
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
