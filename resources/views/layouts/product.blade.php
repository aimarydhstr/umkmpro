<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="icon.png" type="image/x-icon" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }} - {{ $title }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" />
    @vite('resources/css/product.css')
</head>

<body>
    <div id="app">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
    function tambah() {
        let value = parseInt(document.getElementById("qty").value);
        value = isNaN(value) ? 0 : value;
        value++;
        document.getElementById("qty").value = value;
    }

    function min() {
        let value = parseInt(document.getElementById("qty").value);
        value = isNaN(value) ? 0 : value;
        if (value > 1) value--;
        document.getElementById("qty").value = value;
    }
    </script>
</body>

</html>