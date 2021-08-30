<!doctype html>
    <html lang="en">
    <head>
        @include('includes.head')
    </head>
    <body>
        <div>
            @include('includes.sidebar')
            @yield('content')
        </div>
        @include('includes.footer')
    </body>
</html>
