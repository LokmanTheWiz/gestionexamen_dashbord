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
        Schema::create('examens', function (Blueprint $table) {
            $table->id();
            $table->date('dateexamen');
            $table->time('tempexamen');
            $table->string('libelle');
            $table->foreignId('semestre_id')->constrained('semestres')->on('semestres')->onDelete('cascade');
            $table->foreignId('module_id')->constrained('modules')->on('modules')->onDelete('cascade');
            $table->foreignId('matiere_id')->constrained('matieres')->on('matieres')->onDelete('cascade');
            $table->foreignId('professeur_id')->constrained('professeurs')->on('professeurs')->onDelete('cascade');
            $table->foreignId('surveillant_id')->constrained('surveillants')->on('surveillants')->onDelete('cascade');
            $table->foreignId('local_id')->constrained('locals')->on('locals')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('examens');
    }
};
