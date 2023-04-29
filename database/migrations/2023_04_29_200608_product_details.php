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
        Schema::create('product_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id')->unsigned();
            $table->string('video')->nullable();
            $table->integer('quantity');
            $table->string('weight')->nullable();
            $table->double('shipping_price', 8, 2)->nullable();
            $table->enum('payment', ['when recieving', 'bank transfer']);
            $table->tinyInteger('whatsapp');
            $table->text('keywords')->nullable();
            $table->text('hidden_data')->nullable();
            $table->foreign('product_id')->references('id')->on('products')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('product_details');
    }
};
