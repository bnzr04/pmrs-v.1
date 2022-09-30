<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Css -->
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <link rel="stylesheet" href="{{url('fontawesome-free-6.2.0-web/css/all.min.css')}}">
    <link rel="stylesheet" href="{{url('fontawesome-free-6.2.0-web/css/all.css')}}">
    <link rel="stylesheet" href="{{url('bootstrap-5.0.2-dist/css/bootstrap.min.css')}}">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <meta name="csrf-token" content="{{ csrf_token() }}" />

</head>

<body class="font-sans antialiased">
    <div class="flex flex-col" style="height:100vh;">
        @include('layouts.navigation')


        <!-- Page Content -->
        <main class="relative" style="height: 100%;">
            {{ $slot }}
        </main>
    </div>
    <script src="{{url('javascript/jquery-3.6.1.min.js')}}"></script>
    <script src="{{url('javascript/script.js')}}"></script>
    <script src="{{url('bootstrap-5.0.2-dist/js/bootstrap.min.js')}}"></script>
</body>

</html>