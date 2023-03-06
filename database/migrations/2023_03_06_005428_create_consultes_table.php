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
        Schema::create('consultes', function (Blueprint $table) {
            $table->unsignedBigInteger('arbitre_id');
            $table->foreign('arbitre_id')->references('id')->on('arbitres');

            $table->unsignedBigInteger('programme_id');
            $table->foreign('programme_id')->references('id')->on('programmes');

            $table->primary(['arbitre_id','programme_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultes');
    }
};
