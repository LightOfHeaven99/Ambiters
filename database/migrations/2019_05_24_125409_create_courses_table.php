<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('title');
            $table->String('description');
            $table->String('place');
            $table->date('day');
            $table->time('time');
            $table->Float('price');
            $table->Integer('slots');
            $table->Integer('registered');
            $table->String('img');
            $table->Integer('points')->nullable();
            $table->Float('discount')->nullable();
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
        Schema::dropIfExists('courses');
    }
}
