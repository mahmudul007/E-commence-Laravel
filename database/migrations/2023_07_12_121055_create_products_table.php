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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('sku');
            $table->decimal('price');
            $table->string('weight')->nullable();
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->unsignedBigInteger('catagory_id')->nullable();
            $table->longText('description');
            $table->bigInteger('quantity');
            $table->boolean('product_live')->default(false);
            $table->boolean('unlimited_stock')->nullable()->default(false);
            $table->string('colors')->nullable()->default(null);
            $table->string('size')->nullable()->default(null);
            $table->timestamps();


            $table->foreign('catagory_id')
            ->references('id')->on('categories')
            ->onDelete('set null ');
            $table->foreign('brand_id')
            ->references('id')->on('brands')
            ->onDelete('set null');
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
};
