<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrat', function (Blueprint $table) {
            $table->id('id_contrat');
            $table->unsignedBigInteger('id_entite_physique');
            $table->string('numero_contrat', 50);
            $table->enum('statut_contrat', ['AC', 'KO']);
            $table->string('version_contrat', 50);
            $table->enum('type_contrat', ['POSTPAID', 'PREPAID']);
            $table->enum('frequence_facturation', ['ANNU', 'MENS']);
            $table->timestamp('date_creation')->useCurrent();
            $table->date('date_demarrage');

            $table->foreign('id_entite_physique')->references('id_entite_physique')->on('entite_physique')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contrat');
    }
}
