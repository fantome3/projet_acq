<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeces extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contribution_deces', function (Blueprint $table) {
            $table->bigIncrements('id_deces');
            $table->string('nom_defun');
            $table->string('prenom_defun');
            $table->date('date_deces')->nullable();

            $table->unsignedBigInteger('rpn_deces_id');
            $table->foreign('rpn_deces_id')
                ->references('id_rpn')
                ->on('mon_rpn')
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
        Schema::dropIfExists('contribution_deces');
    }
}
