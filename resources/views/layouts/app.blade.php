<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name='keywords' content='italien, hus, til salg, sommerhus, toscana'>
    <meta name='description' content='Dejligt toscansk hus til salg i den smukke by cardoso, kontakt for mere info'>
    <meta name='author' content='cardoso, viasanginese22@gmail.com'>
    <meta name='url' content='http://cardoso.dk'>
    <meta name="robots" content="index,follow">
    <meta name="googlebot" content="index,follow">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @yield('head')
</head>
<body>
    <div id="app">
        <top-bar></top-bar>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
          function initMap() {
            var cardoso = {lat: 44.025, lng: 10.481};
            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 9,
              center: cardoso
            });
            var marker = new google.maps.Marker({
              position: cardoso,
              map: map
            });
          }
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDzQgOJ8RjSduH-BUPvmlxjRTdzcLONWxo&callback=initMap">
    </script>

    @yield('scripts')
</body>
</html>
