<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="description" content="Boomerang is a responsive website template based on the well known Bootstrap framework. It's very well structured with lots of features and demos ready to be used.">
    <meta name="keywords" content="bootstrap, responsive, template, website, html, theme, ux, ui, web, design, developer, support, business, corporate, real estate, education, medical, school, education, demo, css, framework">
    <meta name="author" content="Webpixels">

    <title>{{ config('APP_NAME', 'MUVE - It\'s Time to MUVE') }}</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" type="text/css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800|Roboto:400,500,700" rel="stylesheet">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{asset('vendor/swiper/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/hamburgers/hamburgers.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('vendor/animate/animate.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('vendor/fancybox/css/jquery.fancybox.min.css')}}">

    <!-- Icons -->
    <link rel="stylesheet" href="{{asset('fonts/font-awesome/css/font-awesome.min.css')}} " type="text/css">
    <link rel="stylesheet" href="{{asset('fonts/ionicons/css/ionicons.min.css')}} " type="text/css">
    <link rel="stylesheet" href="{{asset('fonts/line-icons/line-icons.css')}} " type="text/css">
    <link rel="stylesheet" href="{{asset('fonts/line-icons-pro/line-icons-pro.css')}} " type="text/css">

    <!-- Linea Icons -->
    <link rel="stylesheet" href="{{asset('fonts/linea/arrows/linea-icons.css')}} " type="text/css">
    <link rel="stylesheet" href="{{asset('fonts/linea/basic/linea-icons.css')}} " type="text/css">
    <link rel="stylesheet" href="{{asset('fonts/linea/ecommerce/linea-icons.css')}} " type="text/css">
    <link rel="stylesheet" href="{{asset('fonts/linea/software/linea-icons.css')}} " type="text/css">

    <!-- Global style (main) -->
    <link id="stylesheet" type="text/css" href="{{asset('css/boomerang.min.css')}} " rel="stylesheet" media="screen">

    <!-- Custom style - Remove if not necessary -->
    <link type="text/css" href="{{asset('css/custom-style.css')}} " rel="stylesheet">

    <!-- Favicon -->
    <link href="{{asset('images/favicon.png')}} " rel="icon" type="image/png">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        @yield('content')



        <!-- SCRIPTS -->
        <a href="#" class="back-to-top btn-back-to-top"></a>

        <!-- Core -->
        <script src="{{asset('vendor/jquery/jquery.min.js')}} "></script>
        <script src="{{asset('vendor/popper/popper.min.js')}} "></script>
        <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}} "></script>
        <script src="{{asset('js/slidebar/slidebar.js')}} "></script>
        <script src="{{asset('js/classie.js')}} "></script>

        <!-- Bootstrap Extensions -->
        <script src="{{asset('vendor/bootstrap-notify/bootstrap-growl.min.js')}} "></script>
        <script src="{{asset('vendor/scrollpos-styler/scrollpos-styler.js')}} "></script>

        <!-- Plugins: Sorted A-Z -->
        <script src="{{asset('vendor/adaptive-backgrounds/adaptive-backgrounds.js')}} "></script>
        <script src="{{asset('vendor/countdown/js/jquery.countdown.min.js')}} "></script>
        <script src="{{asset('vendor/dropzone/dropzone.min.js')}} "></script>
        <script src="{{asset('vendor/easy-pie-chart/jquery.easypiechart.min.js')}} "></script>
        <script src="{{asset('vendor/fancybox/js/jquery.fancybox.min.js')}} "></script>
        <script src="{{asset('vendor/flatpickr/flatpickr.min.js')}} "></script>
        <script src="{{asset('vendor/flip/flip.min.js')}} "></script>
        <script src="{{asset('vendor/footer-reveal/footer-reveal.min.js')}} "></script>
        <script src="{{asset('vendor/gradientify/jquery.gradientify.min.js')}} "></script>
        <script src="{{asset('vendor/headroom/headroom.min.js')}} "></script>
        <script src="{{asset('vendor/headroom/jquery.headroom.min.js')}} "></script>
        <script src="{{asset('vendor/input-mask/input-mask.min.js')}} "></script>
        <script src="{{asset('vendor/instafeed/instafeed.js')}} "></script>
        <script src="{{asset('vendor/milestone-counter/jquery.countTo.js')}} "></script>
        <script src="{{asset('vendor/nouislider/js/nouislider.min.js')}} "></script>
        <script src="{{asset('vendor/paraxify/paraxify.min.js')}} "></script>
        <script src="{{asset('vendor/select2/js/select2.min.js')}} "></script>
        <script src="{{asset('vendor/sticky-kit/sticky-kit.min.js')}} "></script>
        <script src="{{asset('vendor/swiper/js/swiper.min.js')}} "></script>
        <script src="{{asset('vendor/textarea-autosize/autosize.min.js')}} "></script>
        <script src="{{asset('vendor/typeahead/typeahead.bundle.min.js')}} "></script>
        <script src="{{asset('vendor/typed/typed.min.js')}} "></script>
        <script src="{{asset('vendor/vide/vide.min.js')}} "></script>
        <script src="{{asset('vendor/viewport-checker/viewportchecker.min.js')}} "></script>
        <script src="{{asset('vendor/wow/wow.min.js')}} "></script>

        <!-- Isotope -->
        <script src="{{asset('vendor/isotope/isotope.min.js')}} "></script>
        <script src="{{asset('vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>



        <!-- No UI slider -->
        <script type="text/javascript" src="{{asset('vendor/nouislider/js/nouislider.min.js')}}"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                var snapSlider = document.getElementById('filterPrinceRange');

                noUiSlider.create(snapSlider, {
                    start: [ 50, 800 ],

                    connect: true,
                    range: {
                        'min': 0,
                        '10%': 50,
                        '20%': 150,
                        '30%': 200,
                        '40%': 250,
                        '50%': 300,
                        '60%': 350,
                        '70%': 400,
                        '80%': 450,
                        '90%': 500,
                        'max': 550
                    }
                });

                var snapValues = [
                    document.getElementById('filterPrinceValueLow'),
                    document.getElementById('filterPrinceValueHigh')
                ];

                snapSlider.noUiSlider.on('update', function( values, handle ) {
                    snapValues[handle].innerHTML = values[handle];
                });
            });
        </script>

        <!-- App JS -->
        <script src="{{asset('js/wpx.app.js')}} "></script>
    </body>
</html>
