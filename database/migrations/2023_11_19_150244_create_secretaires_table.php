<?php

// database/migrations/xxxx_xx_xx_create_secretaires_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecretairesTable extends Migration
{
    public function up()
    {
        Schema::create('secretaires', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('adresse');
            $table->string('tel');
            $table->string('email')->unique();
            $table->timestamps();
            $table->Integer('etat')->default(0);
        });
    }

    public function down()
    {
        Schema::dropIfExists('secretaires');
    }
}
