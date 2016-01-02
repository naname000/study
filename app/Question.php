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
 * @property integer $choise_amount
 * @property-read \App\Exam $exam
 */
class Question extends Model
{

    protected $visible = ['order', 'choise_amount'];

    public function exam()
    {
        return $this->belongsTo('App\Exam');
    }
}
