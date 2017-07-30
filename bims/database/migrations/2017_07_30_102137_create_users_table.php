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
            $table->bigIncrements('id');
            $table->('email')->unique();
            $table->string('password')->comment('login password');
            $table->foreign('usergroup_id')
                    ->references('id')
                    ->on('usergroups')->onDelete('cascade');
            $table->enum('is_active',['0','1'])
                    ->comment('1 for active user');
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
        Schema::dropIfExists('users');
    }
}
