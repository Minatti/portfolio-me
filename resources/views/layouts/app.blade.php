<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('navbar')
        

        @endsection

        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>


        @section('footer')

        <footer></footer>

        @endsection
    </body>
</html>