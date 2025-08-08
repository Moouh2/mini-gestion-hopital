<?php

// database/migrations/xxxx_xx_xx_create_actes_medicaux_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActesMedicauxTable extends Migration
{
    public function up()
    {
        Schema::create('actes_medicauxes', function (Blueprint $table) {
            $table->id();
            $table->string('caracteristiques');
            $table->decimal('prix', 8, 2);
            // Ajoutez d'autres colonnes selon vos besoins
            $table->timestamps();
            $table->Integer('etat')->default(0);
        });
    }

    public function down()
    {
        Schema::dropIfExists('actes_medicauxes');
    }
}
