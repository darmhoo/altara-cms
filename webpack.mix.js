let mix = require('laravel-mix');

mix.webpackConfig({
    resolve: {
        alias: {
            moment$: 'moment/moment.js'
        }
    }
});
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

.js('resources/assets/js/app.js', 'public/js')
// .js('node_modules/assets/js/core/jquery.3.2.1.min.js','public/js')
// .js('node_modules/assets/js/core/popper.min.js','public/js')
// .js('node_modules/assets/js/core/bootstrap.min.js','public/js')
// .js('node_modules/assets/js/plugins/bootstrap-switch.js','public/js')
// .js('node_modules/assets/js/plugins/chartist.min.js','public/js')
// .js('node_modules/assets/js/plugins/bootstrap-notify.js','public/js')
// .js('node_modules/assets/js/plugins/jquery.sharrre.js','public/js')
// .js('node_modules/assets/js/plugins/jquery-jvectormap.js','public/js')
// .js('node_modules/moment/min/moment.min.js','public/js')
// .js('node_modules/assets/js/plugins/bootstrap-datetimepicker.js','public/js')
// .js('node_modules/assets/js/plugins/sweetalert2.min.js','public/js')
// .js('node_modules/assets/js/plugins/bootstrap-tagsinput.js','public/js')
// .js('node_modules/assets/js/plugins/nouislider.js','public/js')
// .js('node_modules/assets/js/plugins/bootstrap-selectpicker.js','public/js')
// .js('node_modules/assets/js/plugins/jquery.validate.min.js','public/js')
// .js('node_modules/assets/js/plugins/jquery.bootstrap-wizard.js','public/js')
// .js('node_modules/assets/js/plugins/bootstrap-table.js','public/js')
// .js('node_modules/assets/js/plugins/jquery.dataTables.min.js','public/js')
// .js('node_modules/assets/js/plugins/fullcalendar.min.js','public/js')
// .js('node_modules/assets/js/light-bootstrap-dashboard790f.js','public/js')
    .sass('resources/assets/sass/app.scss', 'public/css');
mix.styles(['resources/assets/external/css/bootstrap.min.css',
'resources/assets/external/css/now-ui-kit.min.css',
], 'public/css/all.css');

mix.options({ processCssUrls: false });


// mix.autoload({
//     jquery: ['$', 'window.jQuery',"jQuery","window.$","jquery","window.jquery"]
// });

// mix.version();


// <!--   Core JS Files   -->
// <script src="../" type="text/javascript"></script>
// <script src="../" type="text/javascript"></script>
// <script src="../" type="text/javascript"></script>
// <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
// <script src="../"></script>
// <!--  Google Maps Plugin    -->
// <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
// <!--  Chartist Plugin  -->
// <script src="../"></script>
// <!--  Notifications Plugin    -->
// <script src="../"></script>
// <!--  Share Plugin -->
// <script src="../"></script>
// <!--  jVector Map  -->
// <script src="../" type="text/javascript"></script>
// <!--  Plugin for Date Time Picker and Full Calendar Plugin-->
// <script src="../"></script>
// <!--  DatetimePicker   -->
// <script src="../"></script>
// <!--  Sweet Alert  -->
// <script src="../" type="text/javascript"></script>
// <!--  Tags Input  -->
// <script src="../" type="text/javascript"></script>
// <!--  Sliders  -->
// <script src="../" type="text/javascript"></script>
// <!--  Bootstrap Select  -->
// <script src="../" type="text/javascript"></script>
// <!--  jQueryValidate  -->
// <script src="../" type="text/javascript"></script>
// <!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
// <script src="../"></script>
// <!--  Bootstrap Table Plugin -->
// <script src="../"></script>
// <!--  DataTable Plugin -->
// <script src="../"></script>
// <!--  Full Calendar   -->
// <script src="../"></script>
// <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
// <script src="../" type="text/javascript"></script>
// <!-- Light Dashboard DEMO methods, don't include it in your project! -->
// <script src="../assets/js/demo.js"></script>


//     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
//     <link rel="stylesheet" href="../../../maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
//     <!-- CSS Files -->
//     <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
//     <link href="../assets/css/light-bootstrap-dashboard790f.css?v=2.0.1" rel="stylesheet" />
//     <!-- CSS Just for demo purpose, don't include it in your project -->
