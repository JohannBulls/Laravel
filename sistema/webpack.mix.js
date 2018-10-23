const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles([
    //Icons
    'resources/plantilla/css/font-awesome.min.css',
    'resources/plantilla/css/simple-line-icons.min.css',
    //Main styles for this application
    'resources/plantilla/css/style.css'
], 'public/css/plantilla.css')
.scripts([
    //Bootstrap and necessary plugins
    'resources/plantilla/js/jquery.min.js',
    'resources/plantilla/js/popper.min.js',
    'resources/plantilla/js/bootstrap.min.js',
    'resources/plantilla/js/pace.min.js',
    //Plugins and scripts required by all views
    'resources/plantilla/js/Chart.min.js',
    //GenesisUI main scripts
    'resources/plantilla/js/template.js'
], 'public/js/plantilla.js')
.js (['resources/js/app.js'],'public/js/app.js ');
