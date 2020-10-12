<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasicConsultingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basic_consulting', function (Blueprint $table) {
            $table->id();
            $table->foreignId('std_id')->references('id')->on('students')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->string('mbti');
            $table->tinyInteger('iq');
            $table->text('details');
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
        Schema::dropIfExists('basic_consulting');
    }
}
