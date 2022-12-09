<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('address_id')->unsigned();
            $table->bigInteger('discount_coupon_id')->unsigned()->nullable();
            $table->integer('price');
            $table->integer('shipping_price')->default(0);
            $table->string('code');
            $table->enum('status',['preparation','in_route','completed'])->default('preparation');
            $table->enum('payment_method',['bank_transfer','electronic_wallet','paiement_when_recieving','credit_card'])->default('paiement_when_recieving');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
