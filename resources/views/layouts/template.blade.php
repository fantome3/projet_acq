<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="jires djoko" content="personnel" />
    <meta name="emprunt" content="ACQ">
    <!-- Document title -->
    <title>ACQ | Association des Camerounais</title>
    <!-- Stylesheets & Fonts -->
    <link rel="stylesheet" href="{{asset('css/plugins.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
</head>

<body>
    <!-- Body Inner -->
    <div class="body-inner">
        @include('component.header')
        @yield('content')
        @include('component.footer')
    </div>
    <!-- end: Body Inner -->

    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up1"></i><i class="icon-chevron-up1"></i></a>
    <!--Plugins-->
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>

    <!--Template functions-->
    <script src="{{asset('js/functions.js')}}"></script>

    <script>
        // On attend que la page soit chargée 
        jQuery(document).ready(function() {
            // On cache la zone de texte
            jQuery('#texte1').hide();
            jQuery('#texte2').hide();
            // toggle() lorsque le lien avec l'ID #toggler est cliqué
            jQuery('#rpn').click(function() {
                jQuery('#texte1').toggle(400);
                return true;
            });
            jQuery('#member').click(function() {
                jQuery('#texte2').toggle(400);
                return true;
            });
            jQuery('#pass').click(function() {
                jQuery('#texte1').toggle(400);
            });
        });
    </script>
</body>

</html>