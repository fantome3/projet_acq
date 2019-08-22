<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserMembres extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_membres', function (Blueprint $table) {
            $table->bigIncrements('id_user_membre');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('membre_id');
            
            $table->foreign('user_id')
                ->references('id_user')
                ->on('users')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('membre_id')
                ->references('id_membre')
                ->on('membres')
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
        Schema::dropIfExists('user_membres');
    }
}
