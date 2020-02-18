<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTareasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tareas', function (Blueprint $table) {
            $table->bigIncrements('id'); //llave primaria
            $table->unsignedBigInteger('categoria_id'); //llave foranea
            $table->unsignedBigInteger('user_id'); //llave foranea
            $table->string('nombre_tarea');
            $table->date('fecha_inicio');
            $table->date('fecha_termino');
            $table->text('descripcion');
            //$table->bigInteger('categoria_id')->uninsigned()
            $table->smallInteger('prioridad')->unsigned();
            $table->string('status');
            $table->boolean('terminado');
            $table->timestamps(); /*cuando se creo y cuando se modifico*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() /*Lo contrario de up, por ejemplo si se crea una tabla en UP en DOWN la elimina*/
    {
        Schema::dropIfExists('tareas');
    }
}
