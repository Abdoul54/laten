<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article', function (Blueprint $table) {
            $table->id('id_article');
            $table->unsignedBigInteger('id_contrat');
            $table->string('libelle', 255);
            $table->decimal('montant', 10, 2);
            $table->decimal('remise', 10, 2);
            $table->enum('devise', ['EUR', 'MAD', 'DOL']);
            $table->timestamp('date_creation')->useCurrent();
            $table->foreign('id_contrat')->references('id_contrat')->on('contrat')->onDelete('cascade')->onUpdate('cascade');
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
