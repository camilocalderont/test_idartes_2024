<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParametrosDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_parametros_detalles', function (Blueprint $table) {
           $table->increments('i_pk_id');
            $table->string('vc_parametro_detalle');
            $table->integer('i_estado');

            $table->integer('i_fk_id_parametro')->unsigned();
            $table->foreign('i_fk_id_parametro')->references('i_pk_id')->on('tbl_parametros');

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
        Schema::table('tbl_parametros_detalles', function (Blueprint $table)
        {
            $table->dropForeign('tbl_parametros_detalles_i_fk_id_parametro_foreign');
        });
        
        Schema::dropIfExists('tbl_parametros_detalles');
    }
}
