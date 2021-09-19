<html>
    <head>
        <title> Halaman @yield('title')</title>
        <link rel="stylesheet" type="text/css" href="{{asset('/css/app.css') }}">
    </head>
    <body>
        @yield('Judul Halaman')
        @yield('isi')
    </body>
</html>