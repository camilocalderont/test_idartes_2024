<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_actividades', function (Blueprint $table) {
            $table->increments('i_pk_id');
            $table->string('vc_actividad');
            $table->string('vc_descripcion');
            $table->string('vc_redireccion');
            $table->string('vc_imagen');
            $table->integer('i_estado');
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
        Schema::dropIfExists('tbl_actividades');
    }
}
