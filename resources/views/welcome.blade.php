<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body class="antialiased">

        <script src="//code.jquery.com/jquery-3.7.0.min.js"></script>

        @if (session('success'))
            {!! Notifications::notify(session('success')) !!}
        @endif

        @if (session('danger'))
            {!! Notifications::notify(session('danger')) !!}
        @endif

        @if (session('info'))
            {!! Notifications::notify(session('info')) !!}
        @endif

        @if (session('warning'))
            {!! Notifications::notify(session('warning')) !!}
        @endif

    </body>
</html>
