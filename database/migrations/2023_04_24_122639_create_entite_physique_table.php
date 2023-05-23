<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntitePhysiqueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entite_physique', function (Blueprint $table) {
            $table->id('id_entite_physique');
            $table->unsignedBigInteger('id_entite_social');
            $table->string('libelle', 255);
            $table->string('numero_client', 50);
            $table->string('adresse', 255);
            $table->string('code_postal', 20);
            $table->enum('status_ep', ['AC', 'KO', 'PR']);
            $table->timestamp('date_creation')->useCurrent();
            $table->foreign('id_entite_social')->references('id_entite_social')->on('entity_sociale')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entite_physique');
    }
}
