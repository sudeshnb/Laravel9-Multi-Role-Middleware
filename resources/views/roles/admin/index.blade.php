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
    <script src="{{ asset('js/main.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>

<body">
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
  <!-- Navbar -->
  @include('roles.admin.partials.nav-bar')
  <!-- /.navbar -->
  {{-- @include('admin.partials.left-sidebar') --}}
  <!-- Content Wrapper. Contains page content -->
  {{-- <div class="content-wrapper"> --}}
    <div class="app-main">
        @include('roles.admin.partials.left-side-menu')
    <!-- Content Header (Page header) -->
    {{-- @yield('content-header') --}}
    <!-- Main content -->
    {{-- <section class="content"> --}}
      {{-- <div class="container-fluid"> --}}
          {{-- @yield('body') --}}
      {{-- </div> --}}
      <!-- /.container-fluid -->
    {{-- </section> --}}
    <!-- /.content -->
    <div class="app-main__outer">
        <div class="app-main__inner">
            @yield('body')
        </div>
        @include('roles.admin.partials.footer')
    </div>
  </div>
  <!-- /.content-wrapper -->
  

</div>
<!-- ./wrapper -->
</body>
</html>
