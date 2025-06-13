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
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email')->unique();
            $table->string('telefono')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->text('direccion')->nullable();
            $table->string('estado')->default('activo'); // Estado del estudiante
            $table->string('nivel_estudio')->default('primaria'); // Nivel de estudio del estudiante
            $table->string('genero')->nullable(); // Género del estudiante
            $table->string('documento_identidad')->nullable(); // Documento de identidad del estudiante
            $table->string('observaciones')->nullable(); // Observaciones adicionales sobre el estudiante
            $table->string('codigo_estudiante')->unique(); // Código único del estudiante
            $table->string('grado')->nullable(); // Grado del estudiante
            $table->string('padre_apoderado')->nullable(); // Nombre del padre o apoderado
            $table->string('telefono_padre_apoderado')->nullable(); // Teléfono del padre o apoderado
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiantes');
    }
};
