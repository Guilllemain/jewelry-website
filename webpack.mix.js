let mix = require('laravel-mix');

let tailwindcss = require('tailwindcss');

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

mix.js('resources/assets/js/app.js', 'public/js')
mix.js('resources/assets/js/magnify.js', 'public/js')
mix.js('resources/assets/js/magnify-mobile.js', 'public/js')
mix.js('resources/assets/js/lity.js', 'public/js')
mix.js('resources/assets/js/lightslider.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .options({
	    processCssUrls: false,
	    postCss: [ tailwindcss('resources/assets/js/tailwind.js') ],
	})
   .sass('resources/assets/sass/admin.scss', 'public/css');