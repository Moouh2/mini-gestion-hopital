<?php
// database/migrations/xxxx_xx_xx_create_patients_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('adresse');
            $table->string('tel');
            $table->string('profession');
            $table->date('date_naiss');
            $table->string('sexe');
            $table->string('email')->unique();
            $table->string('statut');
            $table->integer('nombre_enfant');
            $table->string('type_piece');
            $table->string('numero_piece');
            $table->timestamps();
            $table->Integer('etat')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
