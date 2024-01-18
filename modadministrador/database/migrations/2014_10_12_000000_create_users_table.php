<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('i_fk_tipo_documento')->unsigned();
            $table->integer('i_cedula');
            $table->string('name');
            $table->string('vc_segundo_nombre', 50)->nullable();
            $table->string('vc_primer_apellido', 50);
            $table->string('vc_segundo_apellido', 50);
            $table->string('vc_genero');
            $table->date('dt_fecha_nacimiento');
            $table->string('email')->unique();
            $table->integer('i_fk_ciudad')->unsigned();
            $table->integer('i_fk_genero')->unsigned();
            $table->integer('i_fk_etnia')->unsigned();
            $table->integer('i_fk_eps')->unsigned();
            $table->string('vc_rh', 50);
            $table->string('vc_telefono', 50);
            $table->string('vc_celular', 50);
            $table->string('vc_direccion', 50);
            $table->string('password')->nullable();
            $table->integer('vc_estado');
            $table->rememberToken();
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
        Schema::dropIfExists('tbl_users');
    }
}
