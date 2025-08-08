<?php

// database/migrations/xxxx_xx_xx_create_antecedents_maladies_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAntecedentsMaladiesTable extends Migration
{
    public function up()
    {
        Schema::create('antecedents_maladies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_patient')->constrained('patients');
            $table->foreignId('id_maladie')->constrained('maladies');
            $table->foreignId('id_periode')->constrained('periodes');
            $table->boolean('positif');
            $table->boolean('negatif');
            $table->timestamps();
            $table->Integer('etat')->default(0);
        });
    }

    public function down()
    {
        Schema::dropIfExists('antecedents_maladies');
    }
}
