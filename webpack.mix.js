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

 // Styles
// mix.styles([
//     'node_modules/font-awesome/css/font-awesome.min.css',
//     'node_modules/simple-line-icons/css/simple-line-icons.css'
// ], 'public/css/app.css')
// .copy('node_modules/font-awesome/fonts', 'public/fonts');

mix.sass('resources/assets/sass/app.scss', 'public/css');

mix.copy([
	'resources/assets/img/*'
], 'public/img')

// Scripts
mix.combine([
	'node_modules/jquery/dist/jquery.min.js',
	'node_modules/popper.js/dist/umd/popper.min.js',
	'node_modules/bootstrap/dist/js/bootstrap.min.js',
	'node_modules/pace-progress/pace.min.js',
	'resources/assets/js/app.js',
	'resources/assets/js/my_app.js'
], 'public/js/app.js');

// mix.js('node_modules/jquery/dist/jquery.min.js', 'public/js/app.js');
// mix.js('node_modules/popper.js/dist/umd/popper.min.js', 'public/js/app.js');
// mix.js('node_modules/bootstrap/dist/js/bootstrap.min.js', 'public/js/app.js');

// mix.js('resources/assets/js/app.js', 'public/js');
   // .sass('resources/assets/sass/app.scss', 'public/css');
