<?php

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
            $table->integer('customerID');
            $table->integer('tableNo');
            $table->integer('coffee1')->default(0);
            $table->integer('coffee2')->default(0);
            $table->integer('coffee3')->default(0);
            $table->integer('coffee4')->default(0);
            $table->integer('coffee5')->default(0);
            $table->integer('pastry1')->default(0);
            $table->integer('pastry2')->default(0);
            $table->integer('pastry3')->default(0);
            $table->integer('pastry4')->default(0);
            $table->integer('pastry5')->default(0);
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
        Schema::drop('orders');
    }
}
