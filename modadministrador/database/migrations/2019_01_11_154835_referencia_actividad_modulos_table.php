<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ReferenciaActividadModulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('tbl_actividades', function (Blueprint $table) {
            $table->integer('i_fk_id_modulo')->unsigned();
            $table->foreign('i_fk_id_modulo')->references('i_pk_id')->on('tbl_modulo');
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
        Schema::table('tbl_actividades', function (Blueprint $table)
        {
            $table->dropForeign('tbl_actividades_i_fk_id_modulo_foreign');
        });
    }
}
