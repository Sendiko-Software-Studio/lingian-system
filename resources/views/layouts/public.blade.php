<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lingian Smart Breakfast System</title>

    <style>
        body {
            height: 100%;
        }
    </style>

    @include('component.css')
</head>
<body>

    @include('component.navbar')

    <div>
        @yield('header')
    </div>

    <div>
        @yield('content')
    </div>

    @include('component.footer')

    @include('component.js')
    
</body>
</html>