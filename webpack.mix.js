const mix = require('laravel-mix')

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

require('laravel-mix-svg-vue')

mix
  .js('resources/js/app.js', 'public/js')
  .sass('resources/sass/app.scss', 'public/css')
  .svgVue({
    svgPath: 'public/svg',
    extract: false,
    svgoSettings: [
      { removeTitle: true },
      { removeViewBox: false },
      { removeDimensions: true }
    ]
  })
