<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExecutivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('executives', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable(false);
            $table->string('designation')->nullable(false);
             $table->string('file')->nullable();
             $table->string('date_of_birth')->nullable();
             $table->string('father_name')->nullable();
             $table->string('mother_name')->nullable();
             $table->string('gender')->nullable(false);
             $table->string('marital')->nullable();
             $table->string('p_district')->nullable();
             $table->string('p_area')->nullable();
             $table->string('p_street')->nullable();
             $table->string('t_district')->nullable();
             $table->string('t_area')->nullable();
             $table->string('t_street')->nullable();
             $table->string('p_occupation')->nullable();
             $table->string('s_occupation')->nullable();
             $table->string('skills')->nullable();
             $table->string('phone')->nullable();
              $table->string('email')->unique();
             $table->string('available_time')->nullable();
             $table->string('available_area')->nullable();
             $table->string('language')->nullable();
             $table->string('work')->nullable();
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
        Schema::dropIfExists('executives');
    }
}
