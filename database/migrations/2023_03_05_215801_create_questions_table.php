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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string( column:'question')->default( value:'0')->nullable();
            $table->string('level');
            $table->string( column: 'a')->default( value: '0')->nullable();
            $table->string( column: 'b')->default( value:'0')->nullable();
            $table->string( column:'c')->default( value: '0')->nullable();
            $table->string( column: 'd')->default( value: '0')->nullable();
            $table->string( column: 'ans')->default( value: '0')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
