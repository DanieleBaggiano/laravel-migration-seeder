<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('azienda');
            $table->string('stazione_partenza');
            $table->string('stazione_arrivo');
            $table->time('orario_partenza');
            $table->time('orario_arrivo');
            $table->string('codice_treno');
            $table->integer('numero_carrozze')->unsigned();
            $table->boolean('in_orario')->default(true);
            $table->boolean('cancellato')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};


// CREATE TABLE trains (
//     id BIGINT AUTO_INCREMENT PRIMARY KEY,
//     azienda VARCHAR(255) NOT NULL,
//     stazione_partenza VARCHAR(255) NOT NULL,
//     stazione_arrivo VARCHAR(255) NOT NULL,
//     orario_partenza TIME NOT NULL,
//     orario_arrivo TIME NOT NULL,
//     codice_treno VARCHAR(255) NOT NULL,
//     numero_carrozze INT UNSIGNED NOT NULL,
//     in_orario BOOLEAN DEFAULT TRUE,
//     cancellato BOOLEAN DEFAULT FALSE,
//     created_at TIMESTAMP NULL DEFAULT NULL,
//     updated_at TIMESTAMP NULL DEFAULT NULL
// );
