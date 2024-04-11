<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Article');
            $table->string('Country');
            $table->decimal('Weight', 8, 2);
            $table->decimal('Price', 10, 2);
            $table->text('Description');
            $table->integer('Availablequantity');
            $table->string('Photo_path')->nullable(); // Добавление столбца для пути к фото на сервере
            $table->unsignedBigInteger('ID_Status_Product');
            $table->unsignedBigInteger('ID_Assignment');
            $table->timestamps();

            // Внешние ключи
            $table->foreign('ID_Status_Product')->references('id')->on('status_products')->onDelete('cascade');
            // Предполагается, что существует другая таблица для ID_Assignment, и добавление внешнего ключа происходит аналогичным образом
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
