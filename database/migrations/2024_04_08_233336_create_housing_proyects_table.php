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
        Schema::create('housing_proyects', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
            $table->text('constructora')->nullable()->visible();
            $table->string('departamento');
            $table->string('ciudad');
            $table->string('direccion');
            $table->string('tipo');
            $table->float('tamaño');
            $table->integer('habitaciones');
            $table->integer('baños');
            $table->integer('parqueaderos');
            $table->float('valor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('housing_proyects');
    }
};
