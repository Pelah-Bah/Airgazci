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
        Schema::create('livraison', function (Blueprint $table) {
            $table->id();
            $table->string('numeroLivraison');
            $table->date('dateemissionLivraison');
            $table->date('dateprevuLivraison');
            $table->float('MontantLivraison');
            //client
            $table->string('nomclientLivraison');
            $table->string('contactclientLivraison');
            $table->string('lieuLivraison');
            //
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
        Schema::dropIfExists('livraison');
    }
};