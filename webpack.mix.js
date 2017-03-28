const { mix } = require('laravel-mix');
const bourbon = require('bourbon').includePaths
const neat = require('bourbon-neat').includePaths
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

mix.sass('resources/assets/sass/app.scss', 'public/css', { includePaths: bourbon.concat(neat) });
