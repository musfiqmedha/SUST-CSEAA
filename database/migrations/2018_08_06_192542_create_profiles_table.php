<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->string('pic')->nullable();
            $table->string('full_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('marital')->nullable();
            $table->string('address')->nullable();
            $table->string('skills')->nullable();
            $table->string('phone')->nullable();
            $table->string('language')->nullable();
            $table->string('available')->nullable();
            $table->string('overview')->nullable();
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
        Schema::dropIfExists('profiles');
    }
}
