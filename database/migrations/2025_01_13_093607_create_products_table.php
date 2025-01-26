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
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // автоинкрементный ID
            $table->string('name'); // название товара
            $table->text('description')->nullable(); // описание товара
            $table->string('pathname'); // путь
            $table->string('code')->unique(); // код товара
            $table->decimal('sale_price', 10, 2); // цена
            $table->integer('quantity')->default(0); // количество
            $table->text('images')->nullable(); // изображения
            $table->json('attributes')->nullable();
            $table->timestamps(); // временные метки created_at и updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('attributes'); // Удаляем столбец attributes
        });    }
};
//            $table->id();
//            $table->string('product_code');
//            $table->string('product_name');
//            $table->string('manufacture');
//            $table->string('product_brand');
//            $table->string('category');
//            $table->string('product_image');
//            $table->string('product_characteristic_1');
//            $table->string('product_characteristic_2');
//            $table->string('warranty');
//            $table->integer('product_quantity');
//            $table->decimal('product_price');
//            $table->timestamps();
