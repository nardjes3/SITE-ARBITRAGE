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
        Schema::create('arbitres', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
            $table->string('image');
            $table->string('genre');
            $table->string('role');
            $table->string('pays');
            $table->string('typeSport');
            $table->string('etat');
            $table->string('role2');
            $table->string('niv');
            $table->string('password');
            $table->boolean('notification_envoyee')->default(false);
            $table->boolean('paye_envoyee')->default(false);
            $table->boolean('test_envoyee')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arbitres');
    }
};
