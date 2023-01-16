<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentesayaswers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_quiz')->references('id')->on('quizzes');
            $table->foreignId('id_student')->references('id')->on('students');
            $table->text('answer');
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
        Schema::dropIfExists('studentesayaswers');
    }
};
