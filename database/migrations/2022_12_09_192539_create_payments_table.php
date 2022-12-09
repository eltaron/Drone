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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('invoice_id');
            $table->string('invoice_status');
            $table->string('invoice_reference');
            $table->string('created_date');
            $table->text('comments')->nullable();
            $table->string('payment_gateway');
            $table->string('invoice_display_value');
            $table->bigInteger('transaction_id');
            $table->string('transaction_status');
            $table->string('paid_currency');
            $table->double('paid_currency_value');
            $table->string('card_number');
            $table->tinyInteger('is_success');
            $table->enum('operation',['charge','purchase']);
            $table->bigInteger('order_id')->unsigned();
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
        Schema::dropIfExists('payments');
    }
};
