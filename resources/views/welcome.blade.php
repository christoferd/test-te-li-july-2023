<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet"/>

    @vite('resources/css/app.css')
    @vite('node_modules/tw-elements/dist/js/tw-elements/tw-elements.es.min.js')
    @vite('resources/js/app.js')

</head>
<body class="antialiased">
<div class="p-8">
    <h1 class="text-2xl">Welcome</h1>
    @include('test')
</div>
</body>
</html>
