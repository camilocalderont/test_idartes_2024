<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoPersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('tbl_tipo_persona', function(Blueprint $table)
        {
            $table->increments('i_pk_id');
            $table->integer('i_estado');

            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('tbl_users');
            $table->integer('tipo_id')->unsigned()->index();
            $table->foreign('tipo_id')->references('i_pk_id')->on('tbl_tipo');

            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_tipo_persona', function(Blueprint $table)
        {
            $table->dropForeign('tbl_tipo_persona_user_id_foreign');
            $table->dropForeign('tbl_tipo_persona_tipo_id_foreign');
        });
        Schema::dropIfExists('tbl_tipo_persona');
    }
}
