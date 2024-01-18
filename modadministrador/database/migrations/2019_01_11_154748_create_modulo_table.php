<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModuloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_modulo', function (Blueprint $table) {
            $table->increments('i_pk_id');
            $table->string('vc_modulo');
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
        Schema::dropIfExists('tbl_modulo');
    }
}


