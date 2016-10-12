const elixir = require('laravel-elixir');

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

//or webpack...

elixir(mix => {
    mix.browserify('app.js')
        .styles([
            'bootstrap.css',
            'styles.css'
        ]);

    mix.webpack(
        'reviews/index.js',
        './public/js/reviews/reviews-bundle.js'
    );


});
