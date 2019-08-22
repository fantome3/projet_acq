<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParrainage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parrainages', function (Blueprint $table) {
            $table->bigIncrements('id_parrainage');
            
            $table->unsignedBigInteger('fiole_id');
            $table->unsignedBigInteger('parrain_id');
            
            $table->string('code_fiole');
            $table->date('date_creation');

            $table->foreign('fiole_id')
                ->references('id_membre')
                ->on('membres')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('parrain_id')
                ->references('id_membre')
                ->on('membres')
                ->onDelete('restrict')
                ->onUpdate('restrict'); 
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
        Schema::dropIfExists('parrainages');
    }
}
