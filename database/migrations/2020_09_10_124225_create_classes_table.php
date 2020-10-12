<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('std_id')->references('id')->on('students')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('place_id')->references('id')->on('places')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('std_id')->references('id')->on('students')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('class_id')->references('id')->on('class_info')
                ->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('classes');
    }
}
