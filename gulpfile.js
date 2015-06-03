var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss','resources/css');

    mix.styles([
        '/bower_components/bootstrap/dist/css/bootstrap.min.css',
        '/bower_components/select2/dist/css/select2.min.css',
        '/css/app.css',
    ],'public/css','resources');

    mix.scripts([
        '/bower_components/jquery/dist/jquery.min.js',
        '/bower_components/bootstrap/dist/js/bootstrap.min.js',
        '/bower_components/select2/dist/js/select2.min.js',
    ],'public/js','resources');
});
