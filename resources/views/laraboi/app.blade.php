<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <meta name="description" content="Laraboi">
     <meta name="author" content="NicoAudy">

     <!-- Favicon -->
     <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

     <title>Laraboi 🔥</title>

     <!-- vendor css -->
     <link href="{{ asset('lib/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
     <link href="{{ asset('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">

     <!-- DashForge CSS -->
     <link rel="stylesheet" href="{{ asset('assets/css/dashforge.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/css/dashforge.auth.css') }}">

     <link id="dfMode" rel="stylesheet" href="{{ asset('assets/css/skin.light.css') }}">

     @stack('stylesheet')
</head>

<body>

     @include('laraboi.partials.sidebar')

     <div class="content ht-100v pd-0" id="app">
          @include('laraboi.partials.header')
          <div class="content-body">
               @yield('content')
          </div>
     </div>


     <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
     <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
     <script src="{{ asset('lib/feather-icons/feather.min.js') }}"></script>
     <script src="{{ asset('lib/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
     <script src="{{ asset('lib/jquery.flot/jquery.flot.js') }}"></script>
     <script src="{{ asset('lib/jquery.flot/jquery.flot.stack.js') }}"></script>
     <script src="{{ asset('lib/jquery.flot/jquery.flot.resize.js') }}"></script>

     <script src="{{ asset('assets/js/dashforge.js') }}"></script>
     <script src="{{ asset('assets/js/dashforge.aside.js') }}"></script>

     <!-- append theme customizer -->
     <script src="{{ asset('lib/js-cookie/js.cookie.js') }}"></script>
     <script src="{{ asset('assets/js/dashforge.settings.js') }}"></script>

     @stack('javascript')

</body>

</html>