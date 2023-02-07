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
        Schema::create('stockages', function (Blueprint $table) {
            $table->id();
            $table->string('bouteillesStockages');
            $table->string('designationStockages');
            //parent
            $table->bigInteger('bouteillesidStockages')->unsigned();
            $table->bigInteger('productionsidStockages')->unsigned();
            $table->timestamps();
            $table->foreign('bouteillesidStockages')->references('id')->on('bouteilles');
            $table->foreign('productionsidStockages')->references('id')->on('productions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stockages');
    }
};