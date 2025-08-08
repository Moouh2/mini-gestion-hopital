<?php

// database/migrations/xxxx_xx_xx_create_dossier_patients_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDossierPatientsTable extends Migration
{
    public function up()
    {
        Schema::create('dossier_patients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained('patients'); // Relation avec la table des patients
            $table->text('antecedents_medicaux')->nullable();
            $table->foreignId('medecin_referent_id')->nullable()->constrained('medecins'); // Relation avec la table des médecins
            $table->timestamps();
            $table->Integer('etat')->default(0);
        });
    }

    public function down()
    {
        Schema::dropIfExists('dossier_patients');
    }
}
