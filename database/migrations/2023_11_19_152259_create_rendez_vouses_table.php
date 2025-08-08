<?php
// database/migrations/xxxx_xx_xx_create_rendez_vous_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRendezVousTable extends Migration
{
    public function up()
    {
        Schema::create('rendez_vouses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_consultation')->constrained('consultations');
            $table->foreignId('id_medecin')->constrained('medecins');
            $table->string('heure_rdv');
            $table->date('date_rdv');
            $table->string('statut');
            $table->timestamps();
            $table->Integer('etat')->default(0);
        });
    }

    public function down()
    {
        Schema::dropIfExists('rendez_vouses');
    }
}
