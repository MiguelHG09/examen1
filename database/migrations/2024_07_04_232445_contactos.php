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
    { Schema::create('directorio', function (Blueprint $table) {
        $table->id('codigoEntrada');
        $table->string('nombre');
        $table->string('apellido');
        $table->string('correo')-> unique;   
        $table->string('telefono');
     
    });
    { Schema::create('contactos', function (Blueprint $table) {
        $table->id();
        $table->string('codigoEntrada') -> primaryKey;
        $table->string('nombre');
        $table->string('apellido');
        $table->string('telefono');
     
    });
        //
    }}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
