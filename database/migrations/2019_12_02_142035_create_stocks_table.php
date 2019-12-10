<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product_id')->nullable()->unique();
            $table->string('product_name')->nullable();
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('supplier_id')->nullable()->unsigned();
            $table->string('quantity')->nullable();
            $table->integer('stock_price')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
            
            $table->foreign('supplier_id')->references('id')->on('suppliers')->onCascade('delete');
            $table->foreign('category_id')->references('id')->on('categories')->onCascade('delete');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stocks');
    }
}
