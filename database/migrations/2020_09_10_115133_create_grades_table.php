<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('std_id')->references('id')->on('students')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('exam_id')->references('id')->on('exams')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('emp_id')->references('id')->on('employees')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->float('grade');
            $table->date('date');
            $table->softDeletes();
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
        Schema::dropIfExists('grades');
    }
}
