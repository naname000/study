<?php

namespace App\Repositories;
use App\Exam;

/**
 * Created by IntelliJ IDEA.
 * User: naname
 * Date: 2016/01/02
 * Time: 14:30
 */
interface ExamInterface
{
    /**
     * @param $slug
     * @return Exam
     */
    public function getExamBySlug($slug);
}