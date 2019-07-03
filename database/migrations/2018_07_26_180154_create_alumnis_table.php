<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnis', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->string('full_name')->nullable(false);
             $table->string('file')->nullable();
              $table->string('gender')->nullable();
             $table->string('marital')->nullable();
              $table->string('p_address')->nullable();
             $table->string('t_address')->nullable();
             $table->string('p_occupation')->nullable();
             $table->string('skills')->nullable();
             $table->string('p_number')->nullable();
             $table->string('email')->unique()->nullable(false);
             $table->string('a_area')->nullable();
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
        Schema::dropIfExists('alumnis');
    }
}
