<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFechasToTipoPersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_tipo_persona', function (Blueprint $table) {
            $table->date('d_fecha_inicio')->nullable();  
            $table->date('d_fecha_fin')->nullable();  
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
            $table->dropColumn('d_fecha_inicio');
            $table->dropColumn('d_fecha_fin');
        });
    }
}
