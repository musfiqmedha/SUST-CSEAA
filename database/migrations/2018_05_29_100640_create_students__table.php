<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name')->nullable(false);
            $table->string('file')->nullable();
            $table->string('registration')->nullable(false);
            $table->string('gender')->nullable();
            $table->string('p_district')->nullable();
            $table->string('p_area')->nullable();
            $table->string('p_street')->nullable();
            $table->string('t_district')->nullable();
            $table->string('t_area')->nullable();
            $table->string('t_street')->nullable();
            $table->string('skills')->nullable();
            $table->string('number')->nullable();
            $table->string('email')->unique();
            $table->string('language')->nullable();
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
        Schema::dropIfExists('students');
    }
}
