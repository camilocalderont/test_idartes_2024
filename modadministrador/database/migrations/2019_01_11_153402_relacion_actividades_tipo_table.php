<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelacionActividadesTipoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    
        Schema::table('tbl_actividades', function (Blueprint $table) {
            $table->integer('i_fk_id_tipo')->unsigned();
            $table->foreign('i_fk_id_tipo')->references('i_pk_id')->on('tbl_tipo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_actividades', function (Blueprint $table) {
            $table->dropForeign('tbl_actividades_i_fk_id_tipo_foreign');
            $table->dropColumn('i_fk_id_tipo');
        });
    }
}
