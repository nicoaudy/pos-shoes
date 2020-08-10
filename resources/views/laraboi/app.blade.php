<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@@page-discription">

    <link rel="shortcut icon" href="./images/favicon.png">
    <title>{{ env("APP_NAME", 'Laraboi') }}</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/dashlite.css') }}">

    @stack('stylesheet')
</head>

<body class="nk-body npc-subscription has-aside ui-clean ">
    <div class="nk-app-root">
        <div class="nk-main ">
            <div class="nk-wrap ">
            	@include('laraboi.partials.header')
                <div class="nk-content ">
                    <div class="container wide-xl">
                        <div class="nk-content-inner">
                        	@include('laraboi.partials.sidebar')
                            <div class="nk-content-body">

                                <div class="nk-content-wrap">
                                    @yield('content')
                                </div>

                                @include('laraboi.partials.footer')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>

	{{ noty_assets() }}

    @stack('javascript')
</body>

</html>
