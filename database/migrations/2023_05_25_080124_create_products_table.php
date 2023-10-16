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
            $table->string('name', 50);
            $table->string('slug', 60)->unique();
            $table->text('description');
            $table->string('image');
            $table->integer('qty');
            $table->integer('price');
            $table->integer('discount');
            $table->string('condition')->nullable();
            $table->bigInteger('category_id')->unsigned()->index()->nullable();
            $table->bigInteger('tag_id')->unsigned()->index()->nullable();
            $table->bigInteger('store_id')->unsigned()->index()->nullable();
            $table->bigInteger('seller_id')->unsigned()->index()->nullable();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('store_id')->references('id')->on('stores')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('seller_id')->references('id')->on('users')->onDelete('set null')->onUpdate('cascade');
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
