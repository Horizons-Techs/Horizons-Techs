<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <title>Horizons Techs</title>


    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="">

    @include('layouts.header')

    <main>
        @if (session('error'))
            <div class="alert error">
                {{ session('error') }}
            </div>
        @endif

        @if (session('success'))
            <div class="alert success">
                {{ session('success') }}
            </div>
        @endif
        {{ $slot }}
    </main>

    @include('layouts.footer')

</body>

</html>
