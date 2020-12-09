<html>
    <head>
        <title>App Name: @yield('title','Home Page')</title>
    </head>
    <body>
        @section('sidebar')
            This is master sidebar.
        @show
        <div class="container">
            @yield('contents')
        </div>
    </body>
</html>