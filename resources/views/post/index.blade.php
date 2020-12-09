<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body class="antialiased">
        <h1>{{ $name }}</h1>
       <!-- biến từ controller khác truyền qua  -->
       @if(session('status'))
            {{ session('status') }}
       @else
    </body>
</html>