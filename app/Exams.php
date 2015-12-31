<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Exams
 *
 * @property integer $id
 * @property string $title
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class Exams extends Model
{
    // モデルに関連付けるテーブル名
    protected $table = 'exams';

    // パラメータ改ざんによる攻撃を防ぐため
    // 更新可能なカラムを定義する。

    protected $fillable = array('title');
}
