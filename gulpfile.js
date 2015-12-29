var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function (mix) {


    /**
     * Plugins/themes/libraries etc.
     */
    mix
            /**
             * ---------------------------------------------------
             * The CSS Loaded on the Layouts.
             * ---------------------------------------------------
             */
            .styles(
                    [
                        '../vendor/theme/css/font-awesome.css',
                        '../vendor/theme/css/bootstrap.min.css',
                        '../vendor/theme/css/animate.css',
                        '../vendor/theme/css/admin.css',
                        '../vendor/jquery-ui/jquery-ui.css',
                        '../vendor/sweetalert/sweetalert.css',
                        '../vendor/select2/select2.css',
                        '../vendor/select2/select2-bootstrap.css',
                        '../vendor/theme/css/bootstrap-checkbox.css',
                        '../vendor/dataTables/DT_bootstrap.css'
                    ], './public/css/all.css')
            /**
             * ---------------------------------------------------
             * The CSS Files that is loaded depending on the page.
             * ---------------------------------------------------
             * 
             * 1. The Form wizard style.
             * 2. The main css of our app. (@todo - Create a .scss version of this file for cleaner code) 
             */
            .styles('../vendor/fuelux/css/wizard.css', './public/vendor/fuelux/css/wizard.min.css')
            .styles('main.css', './public/css/main.css');

    /**
     * Plugins/themes/libraries/config etc.
     */
    mix
            /**
             * ---------------------------------------------------
             * The Javascript files Loaded on the Layouts.
             * ---------------------------------------------------
             */
            .scripts(
                    [
                        '../lib/math.min.js',
                        '../lib/chance.min.js',
                        '../vendor/jquery/jquery-1.11.3.min.js',
                        '../vendor/vue/vue.min.js',
                        '../vendor/jquery-ui/jquery-ui.js',
                        '../vendor/theme/js/bootstrap.min.js',
                        '../lib/bootbox.js',
                        '../vendor/sweetalert/sweetalert.min.js',
                        '../vendor/theme/js/common-script.js',
                        '../vendor/theme/js/jquery.slimscroll.min.js',
                        '../vendor/select2/select2.min.js',
                        '../lib/notify.js',
                        'config.js',
                        '../lib/pace.min.js',
                        '../lib/moment.min.js',
                        '../lib/vue-moment.min.js',
                        '../vendor/dataTables/dataTables.js',
                        '../vendor/dataTables/DT_bootstrap.js',
                        'custom-directives.js',
                        'custom-filters.js'
                    ], './public/js/all.js')


            /**
             * --------------------------------------------------
             * The Javascript Files that is loaded depending on the page.
             * --------------------------------------------------
             * 
             * 1. The Form Wizard Scripts.
             * 2. The main javascript of our app.
             */
            .scripts('../vendor/fuelux/js/wizard.js', './public/vendor/fuelux/js/wizard.min.js')
            .scripts('main.js', './public/js/main.js');


});
