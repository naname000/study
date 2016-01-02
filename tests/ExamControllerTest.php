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
        $this->visit('/exams/' . $exam->slug)->seeJson();
    }
}