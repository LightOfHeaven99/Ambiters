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
            $table->String('subtitle');
            $table->String('description', 300);
            $table->String('place');
            $table->String('tutor');
            $table->date('day');
            $table->time('time');
            $table->String('timeEnd');
            $table->Float('price');
            $table->Integer('slots');
            $table->Integer('registered');
            $table->String('img');
            $table->Integer('points');
            $table->Float('discount');
            $table->Boolean('status');
            $table->String('type');
            $table->String('toLearn1')->nullable();
            $table->String('toLearn2')->nullable();
            $table->String('toLearn3')->nullable();
            $table->String('toLearn4')->nullable();
            $table->String('toLearn5')->nullable();
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
