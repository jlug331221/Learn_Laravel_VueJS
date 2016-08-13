var elixir = require('laravel-elixir');

require('laravel-elixir-vueify');

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

elixir(function(mix) {

    mix.copy('resources/assets/fonts', 'public/fonts');

    mix.sass([
        'font-awesome.scss',
        'concise.scss',
        'app.scss'
    ]);

    mix.browserify('main.js');

    mix.browserSync({ proxy: 'laravel_vuejs.app:8000' });

});
