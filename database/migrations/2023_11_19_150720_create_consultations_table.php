<?php

// database/migrations/xxxx_xx_xx_create_consultations_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultationsTable extends Migration
{
    public function up()
    {
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_medecin')->constrained('medecins');
            $table->foreignId('id_patient')->constrained('patients');
            $table->string('numero_ticket');
            $table->dateTime('date_consultation');
            $table->string('motif');
            $table->string('diagnostic');
            $table->decimal('prix_consultation', 8, 2);
            $table->timestamps();
            $table->Integer('etat')->default(0);
        });
    }

    public function down()
    {
        Schema::dropIfExists('consultations');
    }
}
