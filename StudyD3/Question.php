<?php
/**
 * Created by PhpStorm.
 * User: yousan
 * Date: 12/31/15
 * Time: 5:21 PM
 */
namespace StudyD3;

class Question {

    public $id;
    public $markname;
    public $statement_image_path; // "\/img\/path\/hoge.png"
    public $order; //1
    public $choice_amount; //
    public $answer; // 正答
    public $mark; // ユーザ解答
    public $score;  // 配点

    /**
     * Question constructor.
     * @param $id
     * @param $markname
     * @param $statement_image_path
     * @param $order
     * @param $choice_amount
     * @param $answer
     * @param $mark
     * @param $score
     */
    public function __construct() {
        $argKeys = ['id', 'markname', 'statement_image_path',
            'order', 'choice_amount',
            'answer', 'mark', 'score'];
        $args = func_get_args();
        for ($i=0; $i<count($argKeys); $i++) {
            $var = $argKeys[$i];
            if (isset($args[$i])) {
                $this->$var = $args[$i];
            }
        }
    }
}