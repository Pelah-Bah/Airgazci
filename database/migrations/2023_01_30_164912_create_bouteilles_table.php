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
        Schema::create('bouteilles', function (Blueprint $table) {
            $table->id();
            //bouteilles
            $table->string('referenceBouteilles');
            $table->string('numeroBouteilles');
            $table->string('numeroorigineBouteilles');
            $table->text('descriptionBouteilles');
    //dates
            $table->date('dateepreuveBouteilles');
            $table->date('finepreuveBouteilles');
            //stocts
            $table->string('etatBouteilles');
            $table->string('statutBouteilles');
            $table->string('positionsBouteilles');
            //autres
            $table->float('volumeBouteilles');
            $table->string('formatBouteilles');
            $table->string('designationBouteilles');
            //parents
            $table->bigInteger('famillesidBouteilles')->unsigned();
            $table->bigInteger('formatsidBouteilles')->unsigned();
            $table->timestamps();
            $table->foreign('famillesidBouteilles')->references('id')->on('Familles');
            $table->foreign('formatsidBouteilles')->references('id')->on('formats');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bouteilles');
    }
};