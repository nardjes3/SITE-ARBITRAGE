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
        Schema::create('loi_du_jeus', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->mediumText('contenue');
            $table->unsignedBigInteger('cour_id');
            $table->foreign('cour_id')->references('id')->on('cours');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loi_du_jeus');
    }
};
