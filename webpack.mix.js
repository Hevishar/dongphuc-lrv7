const mix = require("laravel-mix");

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
// mix.combine(
//     [
//         "resources/assets/plugins/fontawesome-free/css/all.min.css",
//         "resources/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css",
//         "resources/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css",
//         "resources/assets/plugins/jqvmap/jqvmap.min.css",
//         "resources/assets/css/adminlte.min.css",
//         "resources/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css",
//         "resources/assets/plugins/daterangepicker/daterangepicker.css",
//         "resources/assets/plugins/summernote/summernote-bs4.min.css",
//     ],
//     "public/css/vendor.css"
// ).minify("public/css/vendor.css");

// mix.combine([
//     "resources/assets/plugins/jquery/jquery.min.js",
//     "resources/assets/plugins/jquery-ui/jquery-ui.min.js",
//     "resources/assets/plugins/bootstrap/js/bootstrap.bundle.min.js",
//     "resources/assets/plugins/chart.js/Chart.min.js",
//     "resources/assets/plugins/sparklines/sparkline.js",
//     "resources/assets/plugins/jqvmap/jquery.vmap.min.js",
//     "resources/assets/plugins/jqvmap/maps/jquery.vmap.usa.js",
//     "resources/assets/plugins/jquery-knob/jquery.knob.min.js",
//     "resources/assets/plugins/moment/moment.min.js",
//     "resources/assets/plugins/daterangepicker/daterangepicker.js",
//     "resources/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js",
//     "resources/assets/plugins/summernote/summernote-bs4.min.js",
//     "resources/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js",
//     "resources/assets/js/adminlte.js",
//     "resources/assets/js/demo.js",
//     "resources/assets/js/pages/dashboard.js",
// ],"public/js/vendor.js").minify("public/js/vendor.js");

if (mix.inProduction()) {
    mix.version();
} else {
    // Development settings
    mix.sourceMaps();
    mix.browserSync({
        proxy: 'http://dongphuc-lrv7.test/',
        host: "127.0.0.1",
        port: 8001,
        open: false,
    });
}
