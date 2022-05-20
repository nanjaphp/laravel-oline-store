<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_details', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('transactions_id');
            $table->unsignedBigInteger('products_id');
            $table->float('price');
            $table->string('shipping_status'); // PENDING/SHIPPING/SUCCESS
            $table->string('code')->nullable();
            $table->timestamps();

            $table->foreign('transactions_id')->references('id')->on('transactions')->onDelete('cascade');
            $table->foreign('products_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction_details');
    }
}
