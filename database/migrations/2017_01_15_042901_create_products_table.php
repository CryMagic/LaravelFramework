<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('productName');
            $table->string('alias');
            $table->double('price');
            $table->integer('inStock');//số lượng hàng tồn kho
            $table->double('discount');//giá sản phẩm khi giảm giá
            $table->boolean('isContinue');//sản phẩm có còn bán hay không
            $table->string('picture');
            $table->string('relatedImage');
            $table->float('avgRating');//đánh giá về sản phẩm
            $table->text('discription');//mô tả sản phẩm
            $table->string('note');//thông tin thêm
            $table->integer('supplierID')->unsigned();
            $table->foreign('supplierID')->references('id')->on('supplies');
            $table->integer('cateID')->unsigned();
            $table->foreign('cateID')->references('id')->on('categories');

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
        Schema::dropIfExists('products');
    }
}
