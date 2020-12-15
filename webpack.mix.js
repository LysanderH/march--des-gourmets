const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

require('laravel-mix-critical');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/css/bundle.scss', 'public/css/app.css')
    .critical({
        enabled: mix.inProduction(),
        urls: [
            { src: process.env.BASE_URL + '/', dest: 'public/css/index_critical.min.css' },
        ],
        options: {
            minify: true,
        },
    })
    .options({
        postCss: [
            require('autoprefixer')({
                browsers: ['last 13 versions'],
            }),
            require('css-mqpacker'),
        ],
        processCssUrls: false
    });
