<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactRole', function (Blueprint $table) {
            $table->id('id_contact_role');
            $table->unsignedBigInteger('id_entite_physique');
            $table->unsignedBigInteger('id_contact');
            $table->enum('role', ['admin', 'decisionmaker', 'manager']);
            $table->foreign('id_entite_physique')->references('id_entite_physique')->on('entite_physique')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_contact')->references('id_contact')->on('contact')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contactRole');
    }
}
