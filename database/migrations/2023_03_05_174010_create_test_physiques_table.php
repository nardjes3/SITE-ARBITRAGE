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
        Schema::create('test_physiques', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('inst_phy_id');
            $table->foreign('inst_phy_id')->references('id')->on('instructeur_phies');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_physiques');
    }
};
