<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeferredTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deferred', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ID_Product'); // внешний ключ для связи с таблицей Products
            $table->unsignedBigInteger('ID_Users'); // внешний ключ для связи с таблицей Users
            $table->timestamps();

            // Внешний ключ для связи с таблицей Products
            $table->foreign('ID_Product')->references('id')->on('products')->onDelete('cascade');
            
            // Внешний ключ для связи с таблицей Users
            $table->foreign('ID_Users')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deferred');
    }
}
