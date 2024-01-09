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
        Schema::create('gatos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',50);
            $table->string('image',250);
// Migración para la tabla 'gatos'
$table->foreignId('color_id')->constrained('colors')->onDelete('cascade')->references('id')->on('colors');

            $table->foreignId('gafa_id')->constrained('gafas')->onDelete('cascade');
            $table->foreignId('sombrero_id')->constrained('sombreros')->onDelete('cascade');
            $table->foreignId('expresion_id')->constrained('expresions')->onDelete('cascade');
            $table->foreignId('camiseta_id')->constrained('camisetas')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gatos');
    }
};
