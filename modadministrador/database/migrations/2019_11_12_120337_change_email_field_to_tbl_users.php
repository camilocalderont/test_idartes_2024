<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeEmailFieldToTblUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_users', function (Blueprint $table) {
            $table->dropUnique('tbl_users_email_unique');                                   
            $table->string('email')->nullable()->change();   
            $table->string('i_cedula')->change();
            $table->tinyInteger('i_tipo_persona')->nullable()->comment('1: Contratista, 2: Funcionario');
            $table->integer('i_fk_ciudad')->nullable()->change();    
            $table->integer('vc_rh')->nullable()->change();  
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
            //$table->string('email')->nullable(false)->change();   
            $table->string('email')->unique()->change(); 
            $table->integer('i_cedula')->change();   
            $table->dropColumn('i_tipo_persona');                                  
        });
    }
}
