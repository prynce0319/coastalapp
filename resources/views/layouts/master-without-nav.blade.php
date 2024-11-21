<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-topbar="light" data-sidebar-image="none">

    <head>
    <meta charset="utf-8" />
    <title>@yield('title') | Coastal Zone Mining Association</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Transforming Small-Scale Mining" name="description" />
    <meta content="Prince Ben-Smith" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico')}}">
        @include('layouts.head-css')
  </head>

    @yield('body')

    @yield('content')

    @include('layouts.vendor-scripts')
    </body>
</html>
