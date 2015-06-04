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
        '/vendor/bower_components/bootstrap/dist/css/bootstrap.min.css',
        '/vendor/bower_components/select2/dist/css/select2.min.css',
        '/css/app.css',
    ],'public/css','resources/assets');

    mix.scripts([
        '/vendor/bower_components/jquery/dist/jquery.min.js',
        '/vendor/bower_components/bootstrap/dist/js/bootstrap.min.js',
        '/vendor/bower_components/select2/dist/js/select2.min.js',
    ],'public/js','resources/assets');
});
