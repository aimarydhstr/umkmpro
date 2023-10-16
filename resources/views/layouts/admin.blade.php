<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }} - {{ $title }}</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-200">
    @include('components.alert')
    <div id="app">
        @yield('content')
    </div>
    
    <script type="module">
        $(document).ready(() => {
            if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window
            .matchMedia('(prefers-color-scheme: dark)').matches)) {
                $('html').addClass('dark')
                $('#light').removeClass('hidden');
                $('#dark').addClass('hidden');
            } else {
                $('html').removeClass('dark')
                $('#dark').removeClass('hidden');
                $('#light').addClass('hidden');
            }
            
            $(document).on('click', '#toggle', function(e) {
                e.preventDefault()
                $('#dark').toggleClass('hidden')
                $('#light').toggleClass('hidden')
                
                if (localStorage.getItem('color-theme')) {
                    if (localStorage.getItem('color-theme') === 'light') {
                        $('html').addClass('dark')
                        localStorage.setItem('color-theme', 'dark');
                    } else {
                        $('html').removeClass('dark')
                        localStorage.setItem('color-theme', 'light');
                    }
                    
                } else {
                    if ($('html').hasClass('dark')) {
                        $('#toggle').attr('title', 'Aktifkan Light Mode')
                        $('html').removeClass('dark')
                        localStorage.setItem('color-theme', 'light');
                    } else {
                        $('#toggle').attr('title', 'Aktifkan Dark Mode')
                        $('html').addClass('dark')
                        localStorage.setItem('color-theme', 'dark');
                    }
                }
            })
        })
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>

</html>