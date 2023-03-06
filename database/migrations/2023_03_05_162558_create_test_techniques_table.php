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
        Schema::create('test_techniques', function (Blueprint $table) {
            $table->id();
            $table->string('niveau');
            $table->unsignedBigInteger('ins_tech_id');
            $table->foreign('ins_tech_id')->references('id')->on('instricteur_teches');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_techniques');
    }
};
