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
    Schema::table('departaments', function (Blueprint $table) {
        $table->string('name')->after('id'); // Añadir la columna "name" después de la columna "id"
    });
}

public function down(): void
{
    Schema::table('departaments', function (Blueprint $table) {
        $table->dropColumn('name'); // Eliminar la columna "name" si se revierte la migración
    });
}
};
