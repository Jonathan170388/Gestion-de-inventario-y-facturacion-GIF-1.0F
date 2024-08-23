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
        Schema::create('articulos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo',10);
            $table->string('nombreArticulo',50);
            $table->string('descripcion',50);
            $table->string('ubicacion',10);
            $table->integer('cantidad');
            $table->date('Fabricacion');
            $table->date('Vencimiento');
            $table->string('fabricante',50);
            $table->decimal('precioCompra', 8, 3);
            $table->decimal('precioVenta', 8, 3);
            $table->decimal('descuento', 2, 2);
            $table->integer('stock');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articulos');
    }
};
