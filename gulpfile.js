var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */


elixir.config.publicDir = '';
elixir.config.cssOutput = 'assets/css';
elixir.config.jsOutput = 'assets/js';

elixir(function (mix) {

    mix.styles([
        'bootstrap.min.css', 
        'font-awesome.min.css', 
        'animate.css', 
        'custom.css'
    ], './assets/css/all.css');

    mix.scripts([
        'jquery-1.11.0.js', 
        'bootstrap.min.js', 
        'jquery.easing.min.js', 
        'main.js', 
        'jquery.sticky.js', 
        'wow.min.js'
    ], './assets/js/all.js');





});
