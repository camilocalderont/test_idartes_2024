<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblAuditoriaAdministracionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_auditoria_administracion', function (Blueprint $table) {
            $table->increments('i_pk_id');
            $table->integer('i_id_registro')->unsigned();
            $table->string('vc_tabla',50);
            $table->integer('i_fk_id_usuario')->unsigned()->nullable();
            $table->foreign('i_fk_id_usuario')->references('id')->on('tbl_users');            
            $table->timestamp('d_fecha')->useCurrent();           
            $table->text('tx_campos_antes')->nullable();
            $table->text('tx_campos_ahora')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_auditoria_administracion', function(Blueprint $table)
        {
            $table->dropForeign('tbl_auditoria_administracion_i_fk_id_usuario_foreign');
        });        
        Schema::dropIfExists('tbl_auditoria_administracion');
    }
}
