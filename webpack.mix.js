const mix = require('laravel-mix');

mix.sass('resources/sass/app.scss','public/css/app.css').version();

mix.js('resources/js/app.js','public/js/app.js').version();
