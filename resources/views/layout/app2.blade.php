<!DOCTYPE html>
<html>
    <head>
        @include('layout.css')
    </head>
    <body>
        @include('layout.header2')
        @yield('content')
        @include('layout.footer')
    </body>
    @include('layout.scripts')
    @yield('script')
</html>