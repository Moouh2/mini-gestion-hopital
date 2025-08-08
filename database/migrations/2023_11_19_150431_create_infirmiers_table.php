<?php

// database/migrations/xxxx_xx_xx_create_infirmiers_infirmieres_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfirmiersInfirmieresTable extends Migration
{
    public function up()
    {
        Schema::create('infirmiers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_medecin')->constrained('medecins');
            $table->string('nom');
            $table->string('prenom');
            $table->string('adresse');
            $table->string('tel');
            $table->string('email')->unique();
            $table->string('specialite');
            $table->string('type_service');
            $table->string('caracteristique_service');
            $table->string('chef_service');
            $table->timestamps();
            $table->Integer('etat')->default(0);
        });
    }

    public function down()
    {
        Schema::dropIfExists('infirmiers');
    }
}
