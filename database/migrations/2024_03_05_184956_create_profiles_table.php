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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();

            // campos de la tabla
            $table->string('title', 45)->require;
            $table->text('biografy')->require;
            $table->string('website', 45);

            /**
             * Para relacionar esta tabla con la de usuarios, 
             * necesitamos crear un campo con el mismo valor de la llave primaria.
             *
             */
            $table->unsignedBigInteger('user_id')->unique();
            // Agregar restriccion de llave foranea 
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                // comportamiento al eliminar un usuario
                ->onDelete('cascade') // set null | cascade
                // comportamiento al actualizar un usuario
                // set null | cascade
                ->onUpdate('cascade'); 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
