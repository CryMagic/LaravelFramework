<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userID')->unsigned();
            $table->foreign('userID')->references('id')->on('users');
            $table->date('orderDate');//Ngày lập hóa đơn
            $table->date('shippedDate');//Ngày giao hàng
            $table->integer('statusChecked');//Trạng thái đơn hàng đã được xử lí hay chưa
            $table->double('totalPrice');//Tổng tiền hóa đơn
            $table->string('shipName');
            $table->string('shipPhone');
            $table->string('shipAddress');
            $table->string('shipWard');
            $table->string('shipDistrict');
            $table->string('shipProvince');
            $table->boolean('isRead');
            $table->boolean('isClose');
            $table->string('note');
            $table->integer('paymentMethodID')->unsigned();
            $table->foreign('paymentMethodID')->references('id')->on('payment_methods');
            $table->integer('shipperID')->unsigned();
            $table->foreign('shipperID')->references('id')->on('shippers');
            $table->integer('isPaid');//Trạng thái thanh toán



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
}
