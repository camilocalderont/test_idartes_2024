<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNullableUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_users', function (Blueprint $table) {
            $table->string('vc_segundo_nombre', 50)->nullable()->change();
            $table->string('vc_segundo_apellido', 50)->nullable()->change();  
            $table->integer('i_fk_etnia')->unsigned()->nullable()->change();
            $table->string('vc_telefono', 50)->nullable()->change();
            $table->string('vc_celular', 50)->nullable()->change();
            $table->string('vc_direccion', 250)->nullable()->change();
            $table->dropColumn('vc_genero');                                              
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('tbl_users', function (Blueprint $table) {
             $table->string('vc_segundo_nombre', 50)->change();
            $table->string('vc_segundo_apellido', 50)->change();  
            $table->integer('i_fk_etnia')->unsigned()->change();
            $table->string('vc_telefono', 50)->change();
            $table->string('vc_celular', 50)->change();
            $table->string('vc_direccion', 250)->change();  
            $table->string('vc_genero');            
         });
    }
}
