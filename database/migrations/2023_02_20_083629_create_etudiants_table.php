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
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('codeetudiant');
            $table->string('nom');
            $table->string('prenom');
            $table->string('class');
            $table->foreignId('local_id')->constrained('locals')->on('locals')->onDelete('cascade');
            $table->foreignId('semestre_id')->constrained('semestres')->on('semestres')->onDelete('cascade');
            $table->foreignId('examen_id')->constrained('examens')->on('examens')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiants');
    }
};
