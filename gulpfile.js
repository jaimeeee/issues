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

elixir(function(mix) {
    // BrowserSync
    mix.browserSync({
        proxy: 'issues.dev'
    });
    
    // Stylesheets
    mix.sass('style.scss');
    
    // Scripts
    mix.coffee('issues.coffee');
});
