<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditTipoPersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_tipo_persona', function (Blueprint $table) {
            $table->dropColumn('d_fecha_inicio');
            $table->dropColumn('d_fecha_fin');

            //$table->renameColumn('user_id', 'i_fk_id_usuario');
            //$table->renameColumn('tipo_id', 'i_fk_id_tipo');

            $table->date('dt_fecha_posesion');
            $table->date('dt_fecha_retiro');

            $table->integer('i_fk_id_area')->unsigned()->nullable();
            $table->foreign('i_fk_id_area', 'areaForeignParametroDetallesId')->references('i_pk_id')->on('tbl_parametros_detalles');

            $table->string('vc_anexo_soporte_oficio')->nullable();
            $table->string('vc_anexo_ruta')->nullable();
            $table->string('vc_anexo_ruta_sistema')->nullable();
            $table->integer('i_encargo')->unsigned()->nullable();

            $table->integer('i_estado')->unsigned()->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_tipo_persona', function (Blueprint $table) {
            $table->string('d_fecha_inicio');
            $table->string('d_fecha_fin');
        
            //$table->renameColumn('i_fk_id_usuario', 'user_id');
            //$table->renameColumn('i_fk_id_tipo', 'tipo_id');
        
            $table->dropColumn('dt_fecha_posesion');
            $table->dropColumn('dt_fecha_retiro');
            $table->dropForeign('areaForeignParametroDetallesId');
            $table->dropColumn('i_fk_id_area');
        
            $table->dropColumn('vc_anexo_soporte_oficio');
            $table->dropColumn('vc_anexo_ruta');
            $table->dropColumn('vc_anexo_ruta_sistema');
            $table->dropColumn('i_encargo');

            $table->integer('i_estado')->unsigned()->change();
        });        
    }
}
