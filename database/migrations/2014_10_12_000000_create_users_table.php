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
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Username');
            $table->string('Firstname');
            $table->string('Lastname');
            $table->string('MiddleName')->nullable();
            $table->string('email')->unique();
            $table->string('Telephone')->nullable();
            $table->string('Gender')->nullable();
            $table->date('Birthday');
            $table->boolean('Status')->default(1);
            $table->integer('Age');
        
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
