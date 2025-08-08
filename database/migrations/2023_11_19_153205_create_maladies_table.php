<?php

// database/migrations/xxxx_xx_xx_create_maladies_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaladiesTable extends Migration
{
    public function up()
    {
        Schema::create('maladies', function (Blueprint $table) {
            $table->id();
            $table->string('nom_maladie');
            $table->string('type_maladie');
            // Ajoutez d'autres colonnes selon vos besoins
            $table->timestamps();
            $table->Integer('etat')->default(0);
        });
    }

    public function down()
    {
        Schema::dropIfExists('maladies');
    }
}
