var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixirアセット管理
 |--------------------------------------------------------------------------
 |
 | ElixirはLaravelアプリケーションなのための、基本的なGulpタスクを
 | 定義する、美しく流暢なAPIを提供します。デフォルトでも、アプリケーションの
 | Sassファイルをコンパイルし、同時にベンダーのリソースを発行します。
 |
 */

elixir(function(mix) {
    mix.sass('app.scss').version('public/css/app.css');
});
elixir(function(mix) {
    mix.browserSync({proxy: 'study.dev'});
});
