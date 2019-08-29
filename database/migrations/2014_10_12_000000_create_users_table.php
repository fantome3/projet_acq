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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('user_id');
            $table->string('lastName');
            $table->string('firstName');
            $table->string('email', 100)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('statut');  //statut: 1 si étudiant, 0 si autre
            $table->string('phone', 11)->unique();
            $table->string('town');
            $table->string('country');
            $table->string('password');
            $table->timestamps();
            $table->string('adress');
            $table->string('postCode');
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
