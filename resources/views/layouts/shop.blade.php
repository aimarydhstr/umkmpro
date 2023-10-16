<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="icon.png" type="image/x-icon" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }} - {{ $title }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    @vite('resources/css/shop.css')
</head>

<body>
    <div id="app">
        @yield('content')
    </div>

    <script type="text/javascript">
        const btn_copy = document.getElementById("copyCode");
        const txt_data = document.getElementById("code-coupon");
        btn_copy.onclick = async () => {
            const value = txt_data.value;
            await navigator.clipboard.writeText(value);
            btn_copy.innerHTML =
                '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75" /></svg>';
        };

        const dragCat = document.querySelector("#dragCat");
        let mouseDown = false;
        let startX, scrollLeft;

        let startDragCat = function(e) {
            mouseDown = true;
            startX = e.pageX - dragCat.offsetLeft;
            scrollLeft = dragCat.scrollLeft;
        };

        let stopDragCat = function(event) {
            mouseDown = false;
        };

        dragCat.addEventListener("mousemove", (e) => {
            e.preventDefault();

            if (!mouseDown) return;

            const x = e.pageX - dragCat.offsetLeft;
            const scroll = x - startX;
            dragCat.scrollLeft = scrollLeft - scroll;
        });

        dragCat.addEventListener("mousedown", startDragCat, false);
        dragCat.addEventListener("mouseup", stopDragCat, false);
        dragCat.addEventListener("mouseleave", stopDragCat, false);
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>