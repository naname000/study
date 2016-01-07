<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Question
 *
 * @mixin \Eloquent
 * @property integer $id
 * @property string $statement_image_path
 * @property integer $exam_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property integer $order
 * @property-read \App\Exam $exam
 * @property integer $choice_amount
 * @property integer $answer
 * @property integer $point
 */
class Question extends Model
{

    protected $visible = ['order', 'choice_amount'];

    public function exam()
    {
        return $this->belongsTo('App\Exam');
    }
}
