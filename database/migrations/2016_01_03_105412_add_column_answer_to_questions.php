<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnAnswerToQuestions extends Migration
{
    /**
     * マイグレーション実行
     *
     * @return void
     */
    public function up()
    {
        Schema::table('questions', function (Blueprint $table) {
            $table->integer('answer')->unsgined();
        });
    }

    /**
     * マイグレーションを戻す
     *
     * @return void
     */
    public function down()
    {
        Schema::table('questions', function (Blueprint $table) {
            $table->dropColumn('answer');
        });
    }
}
