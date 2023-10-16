<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }} - {{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
	<script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div id="app">
        @include('components.alert')
        @yield('content')
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>

</html>