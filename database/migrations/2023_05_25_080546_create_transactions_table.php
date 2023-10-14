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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned()->index()->nullable();
            $table->integer('subtotal');
            $table->bigInteger('coupon_used_id')->unsigned()->index()->nullable();
            $table->integer('discount');
            $table->integer('tax');
            $table->integer('total');
            $table->string('pay_image');
            $table->bigInteger('status_id')->unsigned()->index()->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('coupon_used_id')->references('id')->on('coupon_useds')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('status_id')->references('id')->on('statuses')->onDelete('set null')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
