<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblLogLoginTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_log_login', function (Blueprint $table) {
            $table->increments('i_pk_id');
            $table->timestamp('d_fecha_ingreso')->useCurrent(); 
            $table->integer('i_fk_id_usuario')->unsigned();
            $table->foreign('i_fk_id_usuario')->references('id')->on('tbl_users');            
            $table->string('vc_ip')->nullable();
            $table->string('vc_dispositivo')->nullable();
            $table->string('vc_mac')->nullable();
            $table->string('vc_url')->nullable();
            $table->integer('i_fk_id_modulo')->unsigned();
            $table->foreign('i_fk_id_modulo')->references('i_pk_id')->on('tbl_modulo');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_log_login', function(Blueprint $table)
        {
            $table->dropForeign('tbl_log_login_i_fk_id_usuario_foreign');
            $table->dropForeign('tbl_log_login_i_fk_id_modulo_foreign');
        });         
        Schema::dropIfExists('tbl_log_login');
    }
} 
