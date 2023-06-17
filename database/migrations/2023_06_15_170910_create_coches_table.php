<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCochesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coches', function (Blueprint $table) {
            // clave primaria autonumérica
            $table->id(); 

            $table->string('marca', 255);
            $table->string('modelo', 255);
            $table->integer('kms')->default(0);
            $table->float('precio')->default(0);
            $table->boolean('matriculado')->default(false);            

            // marca de tiempo: created_at y updated_at
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
        Schema::dropIfExists('coches');
    }
}
