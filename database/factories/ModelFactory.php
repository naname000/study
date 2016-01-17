<?php

/*
|--------------------------------------------------------------------------
| モデルファクトリー
|--------------------------------------------------------------------------
|
| ここに全部のモデルファクトリーを定義してください。モデルファクトリーは
| テストのためにデータベースの初期値を用意したモデルを作成する便利な方法です。
| モデルがどのように見えれば良いのかをファクトリーに指示するだけです。
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(\App\Exam::class, function (\Faker\Generator $faker) {
    $rand = rand();
    return [
        'title' => '電験3種 理論 H' . $rand,
        'slug' => 'denken3syu-riron-H' . $rand
    ];
});