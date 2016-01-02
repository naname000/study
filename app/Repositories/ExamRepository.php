<?php

namespace App\Repositories;
use App\Exam;

/**
 * Created by IntelliJ IDEA.
 * User: naname
 * Date: 2016/01/02
 * Time: 14:31
 */
class ExamRepository implements ExamInterface
{
    protected $exams;

    public function __construct(Exam $exam)
    {
        $this->exams = $exam;
    }

    public function getExamBySlug($slug)
    {
        return Exam::where('slug', $slug)->firstOrFail();
    }
}