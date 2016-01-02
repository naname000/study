<?php
/**
 * Created by IntelliJ IDEA.
 * User: naname
 * Date: 2016/01/02
 * Time: 12:05
 */

namespace App\Http\Controllers;

use App\Exam;
use Illuminate\Http\Request;

class ExamsController extends Controller
{
    public function showJson(Exam $exam) {
        $json = [
            'EXAM' => $exam->toArray(),
            'QUESTIONS' => $exam->questions->toArray()
        ];
        return response()->json($json);
    }
}
