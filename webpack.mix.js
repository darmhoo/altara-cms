let mix = require('laravel-mix');

mix.webpackConfig({
    resolve: {
        alias: {
            moment$: 'moment/moment.js'
        }
    }
});

mix.js(['resources/assets/js/app.js'], 'public/js/app.js')
    .sass('resources/assets/sass/app.scss', 'public/css/app.css')
    .options({processCssUrls: false})
    .autoload({
        jquery: ['$', 'window.jQuery', "jQuery", "window.$", "jquery", "window.jquery"]
    }).version();