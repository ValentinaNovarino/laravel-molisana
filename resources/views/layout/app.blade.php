<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title></title>
    </head>
    <body>
        @include('partials.header')
        <main>
            @yield('content')
        </main>
        <footer>

        </footer>

        <script src="{{ asset('js/app.js') }}" charset="utf-8"></script>
    </body>
</html>
