<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="icon.png" type="image/x-icon" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    @vite('resources/css/style.css')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" defer></script>
</head>

<body>
    <div id="app">
        @yield('content')
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script type="text/javascript">
    function reveal() {
        var reveals = document.querySelectorAll(".reveal");

        for (var i = 0; i < reveals.length; i++) {
            var windowHeight = window.innerHeight;
            var elementTop = reveals[i].getBoundingClientRect().top;
            var elementVisible = 50;

            if (elementTop < windowHeight - elementVisible) {
                reveals[i].classList.add("active");
            } else {
                reveals[i].classList.remove("active");
            }
        }
    }

    function revealy() {
        var revealies = document.querySelectorAll(".revealy");

        for (var i = 0; i < revealies.length; i++) {
            var windowHeight = window.innerHeight;
            var elementTop = revealies[i].getBoundingClientRect().top;
            var elementVisible = -150;

            if (elementTop < windowHeight - elementVisible) {
                revealies[i].classList.add("active");
            } else {
                revealies[i].classList.remove("active");
            }
        }
    }

    function navbar() {
        let body = document.documentElement;
        let scrollTop = body.scrollTop;
        console.log(scrollTop);
        if (scrollTop > 100) {
            document.getElementById("navbar").classList.add("fixed");
            document.getElementById("navbar").classList.add("fade-top");
            document.getElementById("navbar").classList.remove("fade-bottom");
            document.getElementById("hero").classList.add("isFixed");
        } else {
            document.getElementById("navbar").classList.remove("fixed");
            document.getElementById("navbar").classList.remove("fade-top");
            document.getElementById("navbar").classList.add("fade-bottom");
            document.getElementById("hero").classList.remove("isFixed");
        }
    }

    window.addEventListener("scroll", reveal);
    window.addEventListener("scroll", revealy);
    window.addEventListener("scroll", navbar);
    </script>
    <script>
    $(document).ready(function() {
        $(".owl-carousel").owlCarousel({
            center: true,
            loop: true,
            nav: true,
            items: 5,
            autoplay: false,
            dots: true,
            autoplayTimeout: 8500,
            smartSpeed: 450,
            navText: [
                '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width:30px"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" /></svg>',
                '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width:30px"><path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" /></svg>',
            ],
            responsive: {
                0: {
                    items: 2,
                },
                768: {
                    items: 3,
                },
                990: {
                    items: 5,
                },
            },
            onInitialized: coverFlowEfx,
            onTranslate: coverFlowEfx,
        });

        function coverFlowEfx(e) {
            if ($(".owl-dots")) {
                $(".owl-dots").remove();
            }
            idx = e.item.index;
            $(".owl-item.big").removeClass("big");
            $(".owl-item.medium").removeClass("medium");
            $(".owl-item.mdright").removeClass("mdright");
            $(".owl-item.mdleft").removeClass("mdleft");
            $(".owl-item.smallRight").removeClass("smallRight");
            $(".owl-item.smallLeft").removeClass("smallLeft");
            $(".owl-item")
                .eq(idx - 1)
                .addClass("medium mdleft");
            $(".owl-item").eq(idx).addClass("big");
            $(".owl-item")
                .eq(idx + 1)
                .addClass("medium mdright");
            $(".owl-item")
                .eq(idx + 2)
                .addClass("smallRight");
            $(".owl-item")
                .eq(idx - 2)
                .addClass("smallLeft");
        }

        var click = false;

        $("#play-carousel").click(function(evt) {
            click = !click;
            if (click) {
                $(".status").html("Autoplay: ON");
                $(".owl-carousel").trigger("play.owl.autoplay", [3000, 1000]);
                $(this).html("Stop");
            } else {
                $(".owl-carousel").trigger("stop.owl.autoplay");
                $(this).html("Play");
                $(".status").html("Autoplay: OFF");
            }
        });
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>