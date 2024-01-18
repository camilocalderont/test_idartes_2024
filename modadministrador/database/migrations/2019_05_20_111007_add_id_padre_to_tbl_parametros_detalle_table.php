<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdPadreToTblParametrosDetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_parametros_detalles', function (Blueprint $table) {
            $table->integer('i_fk_id_padre')->unsigned()->nullable();
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
            $table->dropColumn('i_fk_id_padre');   
        });
    } 
}
 