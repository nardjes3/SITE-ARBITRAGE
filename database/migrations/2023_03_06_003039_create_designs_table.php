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
        Schema::create('designs', function (Blueprint $table) {
            $table->unsignedBigInteger('arbitre_id');
            $table->foreign('arbitre_id')->references('id')->on('arbitres');

            $table->unsignedBigInteger('sc_id');
            $table->foreign('sc_id')->references('id')->on('sec_commissions');

            $table->unsignedBigInteger('rencontre_id');
            $table->foreign('rencontre_id')->references('id')->on('rencontres');

            $table->primary(['sc_id','rencontre_id','arbitre_id']);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('designs');
    }
};
