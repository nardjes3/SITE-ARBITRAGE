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
        Schema::create('contients', function (Blueprint $table) {
            $table->unsignedBigInteger('test_tech_id');
            $table->foreign('test_tech_id')->references('id')->on('test_techniques');

            $table->unsignedBigInteger('test_phy_id');
            $table->foreign('test_phy_id')->references('id')->on('test_physiques');

            $table->primary(['test_tech_id','test_phy_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contients');
    }
};
