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
        Schema::create('rencontres', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('heure_debut');
            $table->string('heure_fin');
            $table->integer('ligue');
            $table->integer('day');
            $table->string('arbi1');
            $table->string('arbi2');
            $table->string('arbi3');
            $table->string('arbi4');
            $table->string('equipe1');
            $table->string('equipe2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rencontres');
    }
};
