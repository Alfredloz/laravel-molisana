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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
//Solo quando abbiamo immagini che non devono essere dinamiche (un img dinamica e' quella della foto profilo ad esempio), solo quelle statiche che l utente non deve poter modificare
mix.copyDirectory('resources/img', 'public/img');
//IMPORTANTE LE IMG dentro resources le caricheremo sempre con la sintassi {{ asset ('img/percorso')}}


//Per immagini dinamiche vanno nella directory storage, quindi nel file storage vedi doc a riguardo