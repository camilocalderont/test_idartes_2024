<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeLongVcParametroDetalleTblParametroDetalle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_parametros_detalles', function (Blueprint $table) {
            $table->string('vc_parametro_detalle',255)->change();
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
            $table->string('vc_parametro_detalle')->change();
        });
    }
}
