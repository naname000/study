<?php

use Illuminate\Database\Seeder;

class ExamSeeder extends Seeder
{
    const DEFAULT_SEED_CHOICE_AMOUNT = 5;
    const DEFAULT_SEED_RAND_POINT = 3;
    /**
     * データベース初期値設定実行
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Exam::class, 10)->create()->each(function(\App\Exam $exam) {
            for($i = 1; $i <= 60; $i++) {
                $question = new \App\Question();
                $question->order = $i;
                $question->choice_amount = ExamSeeder::DEFAULT_SEED_CHOICE_AMOUNT;
                $question->answer = rand(1, ExamSeeder::DEFAULT_SEED_CHOICE_AMOUNT);
                $question->point = rand(1, ExamSeeder::DEFAULT_SEED_RAND_POINT);
                $exam->questions()->save($question);
            }
        });
    }
}
