<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIFkAreaPysToTblUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('tbl_users', function (Blueprint $table) 
        {   
            $table->date('dt_fecha_nacimiento')->nullable()->change();               
            $table->integer('i_fk_area_pys')->unsigned()->nullable();
            $table->foreign('i_fk_area_pys','foreign_area_pys')->references('i_pk_id')->on('tbl_parametros_detalles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('tbl_users', function (Blueprint $table) 
        {
            $table->dropForeign('foreign_area_pys');         
            $table->dropColumn('i_fk_area_pys');
        });
    }
}
