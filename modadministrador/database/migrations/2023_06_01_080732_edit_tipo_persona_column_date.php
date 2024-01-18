<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditTipoPersonaColumnDate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_tipo_persona', function (Blueprint $table) {
            $table->dateTime('dt_fecha_posesion')->change();
            $table->dateTime('dt_fecha_retiro')->change();
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
            $table->date('dt_fecha_posesion')->change();
            $table->date('dt_fecha_retiro')->change();
        });
    }
}
