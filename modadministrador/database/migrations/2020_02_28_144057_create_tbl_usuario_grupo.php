<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblUsuarioGrupo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_usuario_grupo', function (Blueprint $table) {
            $table->increments('i_pk_id');
            $table->integer('i_fk_id_usuario')->unsigned()->nullable();
            $table->foreign('i_fk_id_usuario','foreign_asociacion_usuario_grupo')->references('id')->on('tbl_users');
            $table->integer('i_fk_id_grupo');
            $table->integer('i_estado');
            $table->date('d_fecha_retiro');
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
        Schema::table('tbl_usuario_grupo', function(Blueprint $table)
        {
            $table->dropForeign('foreign_asociacion_usuario_grupo');
        });
        Schema::dropIfExists('tbl_usuario_grupo');
    }
}
