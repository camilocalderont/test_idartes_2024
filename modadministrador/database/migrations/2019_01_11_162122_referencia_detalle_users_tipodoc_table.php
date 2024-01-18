<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ReferenciaDetalleUsersTipodocTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::table('tbl_users', function (Blueprint $table) 
        {
            $table->foreign('i_fk_tipo_documento')->references('i_pk_id')->on('tbl_parametros_detalles');
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
        Schema::table('tbl_users', function (Blueprint $table)
        {
            $table->dropForeign('tbl_users_i_fk_tipo_documento_foreign');
        });
    }
}
