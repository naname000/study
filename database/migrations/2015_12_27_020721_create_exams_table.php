<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamsTable extends Migration
{
    /**
     * マイグレーション実行
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->timestamps();
            $table->unique('slug');
        });
    }

    /**
     * マイグレーションを戻す
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('exams');
    }
}
