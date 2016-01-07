<?php
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * Created by IntelliJ IDEA.
 * User: naname
 * Date: 2016/01/02
 * Time: 20:30
 */

class ExamControllerTest extends TestCase
{
    use DatabaseTransactions;

    public function testGetExamJsonBySlug()
    {
        $exam = factory(\App\Exam::class)->create();
        $this->visit('/exams/getJson/' . $exam->slug)->seeJson();
    }

    public function testScore()
    {
        $markname = '';
        $statement_image_path = '';
        $choice_amount = 5;
        $answer = 1;
        $mark = 1;
        $score = 3;

        $questions = [];
        for($i = 1; $i <= 60; $i++) {
            $id = $i; $order = $i;
            $question = new \StudyD3\Question($id, $markname, $statement_image_path, $order, $choice_amount, $answer, $mark, $score);
            $questions[] = $question;
        }

        $exam = new \StudyD3\Exam(1, 'title', 'slug', $questions);
        $dummyRequest = ['data' => json_encode($exam)];
        $this->post('/exams/score', $dummyRequest)->seeJson();
    }
}