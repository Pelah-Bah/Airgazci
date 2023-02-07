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
        Schema::create('productions', function (Blueprint $table) {
            $table->id();
            $table->string('numeroProductions');
            $table->string('gazProductions');
            $table->date('dateProductions');
            $table->string('operateur1Productions');
            $table->string('operateur2Productions');
            $table->string('operateur3Productions');
            $table->string('producteur1Productions');
            $table->string('producteur2Productions');
            $table->string('producteur3Productions');
            $table->string('observationProductions');
            $table->bigInteger('faproduitid')->unsigned();
            $table->integer('quaniteProductions');
            $table->timestamps();
            $table->foreign('faproduitid')->references('id')->on('Familles');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productions');
    }
};