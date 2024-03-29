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
        Schema::create('sec_commissions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastName');
            // $table->integer('num_tel');
            // $table->string('Birthday');
            // $table->string('Gender');
            // $table->string('Country');
            // $table->string('typeSport');
            // $table->string('role');
            $table->string('level');
            $table->string('image');
            $table->string('email');
            $table->string('password');
            $table->boolean('report_envoyee')->default(false);
            $table->boolean('ins_envoyee')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sec_commissions');
    }
};
