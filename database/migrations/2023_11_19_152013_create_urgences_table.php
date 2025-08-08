<?php

// database/migrations/xxxx_xx_xx_create_urgences_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUrgencesTable extends Migration
{
    public function up()
    {
        Schema::create('urgences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_consultation')->constrained('consultations');
            $table->string('heure_urgence');
            $table->timestamps();
            $table->Integer('etat')->default(0);
        });
    }

    public function down()
    {
        Schema::dropIfExists('urgences');
    }
}
