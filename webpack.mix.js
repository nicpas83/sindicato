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

mix
  .styles([
    'node_modules/bootstrap/dist/css/bootstrap.min.css',
    'node_modules/gijgo/css/gijgo.min.css',
    'node_modules/@fortawesome/fontawesome-free/css/all.min.css',
    'node_modules/bootstrap-fileinput/css/fileinput.min.css',
    'node_modules/bootstrap-fileinput/themes/fas/theme.min.css',
    'node_modules/bootstrap-fileinput/themes/explorer-fas/theme.min.css',
    'node_modules/sweetalert2/dist/sweetalert2.min.css',
    'node_modules/datatables.net-dt/css/jquery.dataTables.min.css',
    'node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css',
    'vendor/eideos/framework/resources/sb-admin/css/sb-admin.css',
    'vendor/eideos/framework/resources/css/styles.css',
    'node_modules/bootstrap-select/dist/css/bootstrap-select.min.css',
  ], 'public/css/fmw.css')
  .copy('node_modules/@fortawesome/fontawesome-free/webfonts', 'public/webfonts')
  .copy('node_modules/bootstrap-fileinput/img/loading.gif', 'public/img/loading.gif')
  .copy('node_modules/gijgo/fonts/gijgo-material.woff', 'public/fonts/gijgo-material.woff')
  .copy('node_modules/gijgo/fonts/gijgo-material.ttf', 'public/fonts/gijgo-material.ttf')
  .scripts([
    'node_modules/jquery/dist/jquery.min.js',
    'node_modules/bootstrap/dist/js/bootstrap.bundle.min.js',
    'node_modules/bootstrap-select/dist/js/bootstrap-select.min.js',
    'node_modules/bootstrap-select/dist/js/i18n/defaults-es_ES.min.js',
    'node_modules/moment/min/moment.min.js',
    'node_modules/gijgo/js/gijgo.min.js',
    'node_modules/gijgo/js/messages/messages.es-es.js',
    'node_modules/bootstrap-3-typeahead/bootstrap3-typeahead.min.js',
    'node_modules/jquery.easing/jquery.easing.min.js',
    'node_modules/bootstrap-fileinput/js/plugins/purify.min.js',
    'node_modules/bootstrap-fileinput/js/fileinput.min.js',
    'node_modules/bootstrap-fileinput/js/locales/es.js',
    'node_modules/bootstrap-fileinput/themes/fas/theme.min.js',
    'node_modules/bootstrap-fileinput/themes/explorer-fas/theme.min.js',
    'node_modules/popper.js/dist/umd/popper.min.js',
    'node_modules/sweetalert2/dist/sweetalert2.min.js',
    'node_modules/jquery-mask-plugin/dist/jquery.mask.min.js',
    'node_modules/jszip/dist/jszip.min.js',
    'node_modules/pdfmake/build/pdfmake.min.js',
    'node_modules/pdfmake/build/vfs_fonts.js',
    'node_modules/datatables.net/js/jquery.dataTables.min.js',
    'node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js',
    'node_modules/datatables.net-dt/js/jquery.dataTables.min.js',
    'node_modules/datatables.net-buttons/js/dataTables.buttons.min.js',
    'node_modules/datatables.net-buttons/js/buttons.colVis.min.js',
    'node_modules/datatables.net-buttons/js/buttons.flash.min.js',
    'node_modules/datatables.net-buttons/js/buttons.html5.min.js',
    'node_modules/datatables.net-buttons/js/buttons.print.min.js',
    'public/vendor/jsvalidation/js/jsvalidation.min.js',
    'vendor/eideos/framework/resources/sb-admin/js/sb-admin.js',
    'vendor/eideos/framework/resources/js/fmw.js',
    'vendor/eideos/framework/resources/js/bloqueo.js',
  ], 'public/js/fmw.js');
