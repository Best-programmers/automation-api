<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_information', function (Blueprint $table) {
            $table->id();
            $table->foreignId('std_id')->references('id')->on('students')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('national_code');
            $table->date('birth_date');
            $table->foreignId('cat_id')->references('id')->on('categories');
            $table->boolean('left_hand')->default(FAlSE);
            $table->string('father_mobile',10)->nullable();
            $table->string('mother_mobile',10)->nullable();
            $table->string('home_number',10);
            $table->string('necessary_number',10)->nullable();
            $table->text('address');
            $table->string('std_email');
            $table->string('parent_email');
            $table->string('std_pic_address')->nullable();
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
        Schema::dropIfExists('students_information');
    }
}
