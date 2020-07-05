<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecusoTareaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recuso_tarea', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tarea_id')->references('id')->on('tareas')->onDelete('cascade');
            $table->foreignId('recurso_id')->references('id')->on('recursos')->onDelete('cascade');
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
        Schema::dropIfExists('recuso_tarea');
    }
}
