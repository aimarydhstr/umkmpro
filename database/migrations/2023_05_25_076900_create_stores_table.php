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
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->bigInteger('seller_id')->unsigned()->index()->nullable();
            $table->text('description');
            $table->string('slug', 100)->unique();
            $table->string('photo');
            $table->bigInteger('province_id')->unsigned()->index()->nullable();
            $table->bigInteger('city_id')->unsigned()->index()->nullable();
            $table->string('address');
            $table->string('phone', 15);
            $table->boolean('is_active');
            $table->timestamps();

            $table->foreign('seller_id')->references('id')->on('users')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('province_id')->references('id')->on('provinces')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('set null')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stores');
    }
};