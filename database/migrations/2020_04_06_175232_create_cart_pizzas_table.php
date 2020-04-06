<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartPizzasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_pizzas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('cart_id')->unsigned();
            $table->bigInteger('pizza_id')->unsigned();
            $table->integer('count');
            $table->timestamps();
        });

        Schema::table('cart_pizzas', function (Blueprint $table) {
            $table->foreign('cart_id')->references('id')->on('carts')->onDelete('cascade');
            $table->foreign('pizza_id')->references('id')->on('carts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cart_pizzas', function (Blueprint $table) {
            $table->dropForeign(['cart_id']);
            $table->dropForeign(['pizza_id']);
        });

        Schema::dropIfExists('cart_pizzas');
    }
}
