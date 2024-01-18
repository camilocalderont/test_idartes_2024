<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoActividadPivot extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('tbl_tipo_actividad', function(Blueprint $table)
        {
            $table->increments('i_pk_id');
            $table->integer('i_estado');

            $table->integer('actividad_id')->unsigned()->index();
            $table->foreign('actividad_id')->references('i_pk_id')->on('tbl_actividades');
            $table->integer('tipo_id')->unsigned()->index();
            $table->foreign('tipo_id')->references('i_pk_id')->on('tbl_tipo');

            $table->timestamps();
            $table->softDeletes();

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
         Schema::table('tbl_tipo_actividad', function(Blueprint $table)
        {
            $table->dropForeign('tbl_tipo_actividad_actividad_id_foreign');
            $table->dropForeign('tbl_tipo_actividad_tipo_id_foreign');
        });
        Schema::dropIfExists('tbl_tipo_actividad');
    }
}
