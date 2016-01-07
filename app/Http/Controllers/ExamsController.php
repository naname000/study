<?php
/**
 * Created by IntelliJ IDEA.
 * User: naname
 * Date: 2016/01/02
 * Time: 12:05
 */

namespace App\Http\Controllers;

use App\Exam;
use App\Question;
use stdClass;
use StudyD3\Exam as StudyExam;
use Illuminate\Http\Request;

class ExamsController extends Controller
{

    /**
     * @var Exam
     */
    protected $exam;

    /**
     * ExamsController constructor.
     * @param $exam
     */
    public function __construct(Exam $exam)
    {
        $this->exam = $exam;
    }


    public function showJson(Exam $exam) {
        $json = [
            'EXAM' => $exam->toArray(),
            'QUESTIONS' => $exam->questions->toArray()
        ];
        return response()->json($json);
    }

    public function index() {
        $exams = $this->exam->all();
        return view('exams.index')->with(compact('exams'));
    }

    public function score(Request $request) {
        $json = $request->get('data');
        /** @var StudyExam $exam */
        $exam = json_decode($json);
        /** @var Exam $actualExam */
        $actualExam = Exam::findOrFail($exam->id);
        $ret = $this->_score($exam, $actualExam);
        return response()->json($ret);
    }

    /** 答案返答データを作成 */
    private function _score(stdClass $exam, Exam $actualExam) {
        $questions = $exam->questions;
        $actualQuestions = $actualExam->questions;

        /* 答案返答データの作成 */
        $results = array(); // ['total_point' => 合計得点, 1 => $result, 2,3,...
        $results['total_point'] = 0;
        foreach($actualQuestions as $value) {
            $result = array(); // order, correct_answer, answer, point,
            $result['order'] = $value->order;
            $result['allocation_point'] = $value->point;
            $result['correct_answer'] = $value->answer;
            $result['point'] = 0;
            $result['answer'] = 'Not answered.';
            foreach($questions as $value2) {
                if($value->order == $value2->order) {
                    $result['point'] = ($value->answer == $value2->answer) ? $value->point : 0;
                    $result['answer'] = $value2->answer;
                    $results['total_point'] += $result['point'];
                    break;
                }
            }
            $results[] = $result;
        }
        return $results;
    }
}
