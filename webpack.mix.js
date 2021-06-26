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

mix.js([
    'resources/js/app.js',
    'resources/js/assets/jquery.js',
    ], 'public/js/app.js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/skin/ayanami.scss', 'public/css')
    .sass('resources/sass/skin/nerv.scss', 'public/css')
    .sass('resources/sass/skin/shingeki.scss', 'public/css')
    .sass('resources/sass/skin/akira.scss', 'public/css')
    .sass('resources/sass/skin/giburi.scss', 'public/css')
    .sass('resources/sass/skin/shogouki.scss', 'public/css')
    .sass('resources/sass/admin.scss', 'public/css')
    .sass('resources/sass/public.scss', 'public/css');
