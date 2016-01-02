<?php
namespace App\Services;
use App\Exam;
use Illuminate\Http\Request;

/**
 * Created by IntelliJ IDEA.
 * User: naname
 * Date: 2016/01/02
 * Time: 19:21
 */
interface ExamServiceInterface
{
    /**
     * @param Request $request
     * @return Exam
     */
    public function getExamBySlug(Request $request);
}