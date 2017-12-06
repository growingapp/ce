let mix = require('laravel-mix');

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

mix.sass('resources/assets/bootstrap/scss/bootstrap.scss', 'public/assets/bootstrap/css')
    .js('resources/assets/bootstrap/js/index.js', 'public/assets/bootstrap/js/bootstrap.js')
    .sass('resources/assets/backend/scss/backend.scss', 'public/assets/backend/css')
    .copy('resources/assets/images/logo-small.png', 'public/assets/images');

if (mix.inProduction()) {
    mix.version();
}

mix.disableNotifications();

mix.browserSync('localhost:8085');