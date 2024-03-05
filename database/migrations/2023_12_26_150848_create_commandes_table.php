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
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            // $table->string('payment_intent_id')->nullable();
            $table->integer('amount');
            $table->dateTime('payment_created_at');
            $table->text('products');
            $table->string('user_name'); // Champ pour le nom de l'utilisateur
            $table->string('user_lastname'); // Champ pour le prénom de l'utilisateur
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }
};
