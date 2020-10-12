<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisciplinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disciplines', function (Blueprint $table) {
            $table->id();
            $table->foreignId('std_id')->references('id')->on('students')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('std_id')->references('id')->on('discipline_rules')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('emp_id')->references('id')->on('employees')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->text('details');
            $table->boolean('effective')->default(TRUE);
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
        Schema::dropIfExists('disciplines');
    }
}
