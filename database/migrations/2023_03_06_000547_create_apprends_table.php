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
        Schema::create('apprends', function (Blueprint $table) {
            $table->unsignedBigInteger('arbitre_id');
            $table->foreign('arbitre_id')->references('id')->on('arbitres');

            $table->unsignedBigInteger('cour_id');
            $table->foreign('cour_id')->references('id')->on('cours');

            $table->primary(['arbitre_id','cour_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apprends');
    }
};
