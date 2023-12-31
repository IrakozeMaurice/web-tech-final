<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marks', function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->unsignedBigInteger('teacher_id');
            $table->unsignedBigInteger('course_id');

            $table->string('title');
            $table->enum('group', ['A', 'E']);
            $table->string('semester_name');
            $table->date('semester_start_date');
            $table->date('semester_end_date');
            $table->timestamp('claim_deadline');

            $table->foreign('teacher_id')->references('id')->on('teachers');
            $table->foreign('course_id')->references('id')->on('courses');

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
        Schema::dropIfExists('marks');
    }
}
