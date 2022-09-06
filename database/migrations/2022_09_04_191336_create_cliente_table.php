<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',50)->nullable();
            $table->string('apellidos',50)->nullable();
            $table->string('documento',50)->unique();
            $table->text('direccion')->nullable();
            $table->string('telefono1',50)->nullable();
            $table->string('telefono2',50)->nullable();
            $table->string('correo',100)->unique();

             //relaciones
             $table->unsignedBigInteger('documento_id');
             $table->foreign('documento_id')
                             ->references('id')
                             ->on('tipodocumento')
                             ->onUpdate('cascade')
                             ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
};
