<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUserTable extends Migration
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
            $table->integer('i_fk_area')->unsigned()->nullable();
            $table->foreign('i_fk_area')->references('i_pk_id')->on('tbl_parametros_detalles');
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
            $table->dropForeign('tbl_users_i_fk_area_foreign');
             $table->dropColumn('i_fk_area');
        });
    }
}
