<?php
/**
 * Created by IntelliJ IDEA.
 * User: naname
 * Date: 2016/01/02
 * Time: 12:05
 */

namespace App\Http\Controllers;

use App\Exam;
use App\Services\ExamServiceInterface;
use Illuminate\Http\Request;

class ExamsController extends Controller
{
    /**
     * @var ExamServiceInterface
     */
    private $examServiceInterface;

    /**
     * ExamsController constructor.
     * @param ExamServiceInterface $examServiceInterface
     */
    public function __construct(ExamServiceInterface $examServiceInterface)
    {
        $this->examServiceInterface = $examServiceInterface;
    }

    public function getExamBySlug(Request $request)
    {
        $exam = $this->examServiceInterface->getExamBySlug($request);
        $json = [
            'EXAM' => $exam->toArray(),
            'QUESTIONS' => $exam->questions->toArray()
        ];
        return response()->json($json);
    }

    public function showJson(Exam $exam) {
        $json = [
            'EXAM' => $exam->toArray(),
            'QUESTIONS' => $exam->questions->toArray()
        ];
        return response()->json($json);
    }
}
