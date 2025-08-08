<?php

// database/migrations/xxxx_xx_xx_create_intervenants_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntervenantsTable extends Migration
{
    public function up()
    {
        Schema::create('medecins', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_actes_medicaux')->constrained('actes_medicauxes');
            $table->string('nom');
            $table->string('prenom');
            $table->string('adresse');
            $table->string('tel');
            $table->string('email')->unique();
            $table->string('specialite');
            $table->string('designation');
            $table->string('type_service');
            $table->string('caracteristique_service');
            $table->string('chef_service');
            $table->timestamps();
            $table->Integer('etat')->default(0);
        });
    }

    public function down()
    {
        Schema::dropIfExists('medecins');
    }
}
