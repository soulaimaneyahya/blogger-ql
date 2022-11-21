<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />    
    <meta name="description" content="{{ env('APP_DESCRIPTION') }}" />
    <meta name="keywords" content="{{ env('APP_DESCRIPTION') }}" />
    <meta name="author" content="Soulaimane Yahya - https://github.com/soulaimaneyahya" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="https://pngimg.com/uploads/circle/circle_PNG36.png" type="image/png">
    <meta name="theme-color" content="#ffffff" />
    <title>{{ env('APP_NAME') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    <div id="app">
        <index></index>
    </div>
</body>
</html>
