<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    {{-- <script type="text/javascript" src="{{ asset('js/main.js') }}"></script> --}}
    <script src="{{ asset('js/new.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/clean.css') }}" rel="stylesheet">
</head>

<body class="">
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <!-- Navbar -->
        @include('roles.admin.partials.nav-bar')
        <!-- End Navbar -->
        <div class="app-main btn-close-options">
            {{-- @include('roles.admin.partials.settings') --}}
            @include('roles.admin.partials.left-side-menu')
            <div class="app-main__outer">
                <div class="app-main__inner">
                    @yield('content-header')
                    @yield('body')
                </div>
                @include('roles.admin.partials.footer')
            </div>
        </div>
        <!-- app-main -->
    </div>
    <!-- app-container -->
</body>
</html>
