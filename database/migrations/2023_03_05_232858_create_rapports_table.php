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
        Schema::create('rapports', function (Blueprint $table) {
            $table->id();
            $table->mediumText('contenue');
            $table->unsignedBigInteger('arbitre_id');
            $table->foreign('arbitre_id')->references('id')->on('arbitres');
            $table->unsignedBigInteger('sc_id');
            $table->foreign('sc_id')->references('id')->on('sec_commissions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rapports');
    }
};
