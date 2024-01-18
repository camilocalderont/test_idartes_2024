<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRpcTblParametroDetalle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_parametros_detalles', function (Blueprint $table) {
            $table->decimal('d_rpc',6,2)->nullable();
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
            $table->dropColumn('d_rpc');  
        });
    }
}
