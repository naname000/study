<?php

use Illuminate\Database\Seeder;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Exam::class, 10)->create()->each(function(\App\Exam $exam) {
            for($i = 1; $i <= 60; $i++) {
                $question = new \App\Question();
                $question->order = $i;
                $question->choice_amount = 5;
                $exam->questions()->save($question);
            }
        });
    }
}
