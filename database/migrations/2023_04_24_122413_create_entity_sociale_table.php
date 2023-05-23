<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntitySocialeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entity_sociale', function (Blueprint $table) {
            $table->id('id_entite_social');
            $table->string('raison_social', 255);
            $table->integer('numero_registre');
            $table->string('patente', 50);
            $table->string('adresse', 255);
            $table->string('code_postal', 20);
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
        Schema::dropIfExists('entity_sociale');
    }
}
