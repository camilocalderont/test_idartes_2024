<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddICondigoInternoToTblParametrosDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_parametros_detalles', function (Blueprint $table) {
            $table->integer('i_codigo_interno')->unsigned()->comment('creado para gestionar parametros en distintas entidades sin depender del id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_parametros_detalles', function (Blueprint $table) {
            $table->dropColumn('i_codigo_interno');
        });
    }
}
