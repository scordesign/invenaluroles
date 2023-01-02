<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Productos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     
        Schema::create('productos', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->Integer('name_id')->unsigned();
            $table->foreign('name_id')->references('id')->on('codigos')->onDelete('cascade');
            $table->Integer('bodega_id')->unsigned();
            $table->foreign('bodega_id')->references('id')->on('bodegas')->onDelete('cascade');
            $table->Integer('grupo_id')->unsigned();
            $table->foreign('grupo_id')->references('id')->on('grupos')->onDelete('cascade');
            $table->integer('unidad_id')->unsigned();
            $table->foreign('unidad_id')->references('id')->on('unidades')->onDelete('cascade');
            $table->integer('ubicacion_id')->unsigned();
            $table->foreign('ubicacion_id')->references('id')->on('ubicaciones')->onDelete('cascade');
            $table->timestamps();
            $table->Integer('pareja_id')->unsigned();
            $table->foreign('pareja_id')->references('id')->on('parejas');
            $table->Integer('conteo1')->nullable();
            $table->Integer('parejat_id')->unsigned();
            $table->foreign('parejat_id')->references('id')->on('parejaones');
            $table->Integer('conteo2')->nullable();
            $table->Integer('deferencia12')->nullable();
            $table->Integer('conteo3')->nullable();
            $table->Integer('ancho')->nullable();
            $table->Integer('alto')->nullable();
            $table->Integer('cantidad')->nullable();
        
            

            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
