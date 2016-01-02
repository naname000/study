<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Exams
 *
 * @mixin \Eloquent
 * @property integer $id
 * @property string $title
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $slug
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Question[] $questions
 */
class Exam extends Model
{
    // モデルに関連付けるテーブル名
    protected $table = 'exams';

    // パラメータ改ざんによる攻撃を防ぐため
    // 更新可能なカラムを定義する。

    protected $fillable = array('title');

    protected $visible = ['title'];

    public function questions()
    {
        return $this->hasMany('App\Question');
    }
}
