<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteNullTipoPersona extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("ALTER TABLE tbl_tipo_persona MODIFY dt_fecha_posesion DATETIME NULL, MODIFY dt_fecha_retiro DATETIME NULL");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("ALTER TABLE tbl_tipo_persona MODIFY dt_fecha_posesion DATETIME NOT NULL, MODIFY dt_fecha_retiro DATETIME NOT NULL");
    }
}
