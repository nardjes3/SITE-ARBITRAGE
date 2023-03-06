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
        Schema::create('notifications', function (Blueprint $table) {
            //Notification (id_Notification, nom_Notification, prenom_Notification, contenue_Notification, etat_Notification, #id_secretaire_commission)
            $table->id();
            $table->string('nom_recepteur');
            $table->string('prenom_recepteur');
            $table->mediumText('contenue');
            $table->string('etat');
            $table->unsignedBigInteger('secretaire_commission_id');
            $table->foreign('secretaire_commission_id')->references('id')->on('sec_commissions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
