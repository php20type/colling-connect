<!DOCTYPE html>
<html>
    <head>
        @include('layout.css')
    </head>
    <body>
        @include('layout.header')
        @yield('content')
        @include('layout.footer')
    </body>
    @include('layout.scripts')
    @yield('script')
</html>