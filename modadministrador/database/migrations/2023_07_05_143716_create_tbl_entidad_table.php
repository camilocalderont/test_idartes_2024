<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblEntidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_entidad', function (Blueprint $table) {
            $table->increments('i_pk_id');
            $table->string('vc_nombre', 300);
            $table->string('vc_acronimo', 50);
            $table->string('vc_codigo',50);
            $table->string('vc_codigo_bogdata',50);
            $table->string('vc_nombre_responsable', 300);
            $table->string('vc_telefono_responsable', 100);
            $table->string('vc_correo_responsable', 200);
            $table->tinyInteger('i_principal');
            $table->tinyInteger('i_cabeza_sector');
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
        Schema::dropIfExists('tbl_entidad');
    }
}
