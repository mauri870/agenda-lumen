var elixir = require('laravel-elixir'),
    bowerDir = "vendor/bower_components/";

elixir(function(mix){
    mix.copy(bowerDir + 'bootstrap/fonts', 'public/fonts')
       .copy(bowerDir + 'font-awesome/fonts', 'public/fonts')

        .copy(bowerDir + 'bootstrap/dist/js/bootstrap.js', 'resources/assets/js')
        .copy(bowerDir + 'jquery/dist/jquery.js', 'resources/assets/js')

        //Sweetalert
        .copy(bowerDir + 'sweetalert/dist/sweetalert.css', 'resources/assets/css')
        .copy(bowerDir + 'sweetalert/dist/sweetalert.min.js', 'resources/assets/js')

        .scripts([
            'jquery.js',
            'bootstrap.js',
            'sweetalert.min.js',
            'custom.js',
        ],'public/js/scripts.js')

        .less('app.less')

        .styles([
            'sweetalert.css',
        ],'public/css/custom.min.css');
});