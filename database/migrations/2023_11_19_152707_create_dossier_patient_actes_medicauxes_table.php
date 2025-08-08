<?php

// database/migrations/xxxx_xx_xx_create_dossier_patient_actes_medicaux_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDossierPatientActesMedicauxTable extends Migration
{
    public function up()
    {
        Schema::create('dossier_patient_actes_medicauxes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_dossier')->constrained('dossiers_patients');
            $table->foreignId('id_actes_medicaux')->constrained('actes_medicaux');
            $table->string('resultat_actes');
            $table->date('date_resultat');
            $table->timestamps();
            $table->Integer('etat')->default(0);
        });
    }

    public function down()
    {
        Schema::dropIfExists('dossier_patient_actes_medicauxes');
    }
}

