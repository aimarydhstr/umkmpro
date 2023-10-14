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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('username', 100)->unique();
            $table->string('email', 128)->unique();
            $table->string('password');
            $table->bigInteger('role_id')->unsigned()->index()->nullable();
            $table->string('gender', 15);
            $table->string('photo');
            $table->string('province', 50);
            $table->string('city', 50);
            $table->string('address');
            $table->string('postcode', 20);
            $table->string('phone', 15);
            $table->boolean('is_active');
            $table->timestamps();

            $table->foreign('role_id')->references('id')->on('roles')->onDelete('set null')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
