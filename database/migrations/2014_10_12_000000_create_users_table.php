<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() /**/
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps(); /*cuando se creo y cuando se modifico*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()  /*Lo contrario de up, por ejemplo si se crea una tabla en UP en DOWN la elimina*/
    {
        Schema::dropIfExists('users');
    }
}
