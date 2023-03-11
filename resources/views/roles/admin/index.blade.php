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
    {{-- Styles For Datatable --}}
    {{-- <link href="{{ asset('datatable/css/bootstrap.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"> --}}
    <!-- MDBootstrap Datatables  -->
    {{-- <link href="//cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('dataTable/datatables.min.css') }}"" rel="stylesheet"/> --}}
<link href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.13.3/af-2.5.2/b-2.3.5/b-colvis-2.3.5/b-html5-2.3.5/b-print-2.3.5/cr-1.6.1/date-1.3.1/fc-4.2.1/fh-3.3.1/kt-2.8.1/r-2.4.0/rg-1.3.0/rr-1.3.2/sc-2.1.0/sb-1.4.0/sp-2.1.1/sl-1.6.1/sr-1.2.1/datatables.min.css" rel="stylesheet"/>
    

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
    @stack('stript')
</body>


</html>
