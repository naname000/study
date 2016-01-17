<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * マイグレーション実行
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->text('statement_image_path');
            $table->integer('exam_id')->unsigned();
            $table->foreign('exam_id')
                ->references('id')->on('exams')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * マイグレーションを戻す
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('questions');
    }
}
