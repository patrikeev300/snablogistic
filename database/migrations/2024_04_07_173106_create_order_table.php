<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->date('Data');
            $table->integer('Number');
            $table->decimal('Cost');
            $table->string('Address', 200)->nullable();
            $table->integer('Quantity');
            $table->text('Commentary')->nullable();
            $table->unsignedBigInteger('ID_Product');
            $table->unsignedBigInteger('ID_Users');
            $table->unsignedBigInteger('ID_Status_Order');
            $table->foreign('ID_Product')->references('id')->on('products');
            $table->foreign('ID_Users')->references('id')->on('users');
            $table->foreign('ID_Status_Order')->references('id')->on('status_order');
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
        Schema::dropIfExists('order');
    }
}
