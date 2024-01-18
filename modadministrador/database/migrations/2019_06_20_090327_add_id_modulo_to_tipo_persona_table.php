<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdModuloToTipoPersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_tipo', function (Blueprint $table) {
            $table->integer('i_fk_id_modulo')->unsigned()->nullable();
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
        Schema::table('tbl_tipo', function (Blueprint $table) {
            $table->dropForeign('tbl_tipo_i_fk_id_modulo_foreign');
            $table->dropColumn('i_fk_id_modulo'); 
        }); 
    }
}
