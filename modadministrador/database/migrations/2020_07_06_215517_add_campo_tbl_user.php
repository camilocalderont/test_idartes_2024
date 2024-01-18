<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCampoTblUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_users', function (Blueprint $table) {
            $table->text('tx_firma', 150)->nullable();                                             
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('tbl_users', function (Blueprint $table) {
             $table->dropColumn('tx_firma', 150);  
         });
    }
}
