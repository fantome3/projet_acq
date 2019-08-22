<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRpn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mon_rpn', function (Blueprint $table) {
            $table->bigIncrements('id_rpn');
            $table->unsignedSmallInteger('somme_deposer');
            $table->date('date_payement');
            $table->string('code_fiole')->nullable();
            
            $table->unsignedBigInteger('payeur_rpn_id');
            $table->foreign('payeur_rpn_id')
                ->references('id_user')
                ->on('users')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mon_rpn');
    }
}
