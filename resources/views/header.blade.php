<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- anime on scroll --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css">

    {{-- loading --}}
    <link rel="stylesheet" href="{{ asset('css/loading.css') }}">

    {{-- header css --}}
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <style>
        /* The sticky class is added to the navbar with JS when it reaches its scroll position */
        .sticky {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.6);
            /* Translucent white background */
            backdrop-filter: blur(10px);
            /* Apply blur effect */
            z-index: 1000;
            /* Ensure the sticky element is above other content */
        }

        body {
            min-height: 300vh;
        }
    </style>
</head>

<body>

    <!-- Loading Indicator -->
    <div id="loading" class="loading">
        <img src="{{ asset('images/wheel1.png') }}" alt="Loading..." class="spinner">
    </div>

    <header
        style="background-color: #24408F;
    background-image: url('{{ asset('images/flower.png') }}'), url('{{ asset('images/flower2.png') }}');
    background-position: left top, right top;
    background-repeat: no-repeat, no-repeat;
    background-size: auto 120%, auto 110%;
    ">
        <div class="pt-4 pb-3">
            <p class="fw-bold fs-4 text-light text-center" style="letter-spacing: 0.1rem">
                BAYUEL KINZANG WOESEL CHOLING FOUNDATION
                <br>
                <span class="fw-normal fs-6">
                    Fostering Happiness and Well-being
                </span>
            </p>

        </div>
    </header>

    <div id="navbar">
        {{-- nav bar --}}
        <nav id="realnav" class="navbar navbar-expand-md py-3 border-bottom"
            style="background: transparent; padding: 0 10% 0 10%;">

            <img id="logo" src="{{ asset('images/logo.png') }}" alt="logo"
                style="max-width: 7%; cursor: pointer;">

            <!-- icon when the nav collapse -->
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse justify-content-center custom-bg p-2" id="navbar">
                <ul class="navbar-nav ps-4">
                    <li class="nav-item">
                        <a href="/" class="text-decoration-none me-2 ms-2">HOME
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/lineage" class="text-decoration-none me-2 ms-2">LINEAGE</a>
                    </li>

                    <li class="nav-item">
                        <a href="/activities" class="text-decoration-none me-2 ms-2">ACTIVITIES
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/gallery" class="text-decoration-none me-2 ms-2">GALLERY
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/oraganogram" class="text-decoration-none me-2 ms-2">ORAGANOGRAM
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/about-us" class="text-decoration-none me-2 ms-2">ABOUT US
                        </a>
                    </li>

                </ul>

                {{-- hides the btn on l=md and lg screens but displays on collapse --}}
                <button
                    onclick="window.location.href='/donation'"class="btn btn-sm btn-warning text-light px-3 py-2  my-4 ms-4 mt-md-0 d-md-none"
                    style="border-radius:20px; font-size:12px;">
                    SUPPORT
                </button>
            </div>

            <!-- Button -->
            <button id="toggleButton" class="btn btn-sm text-light p-3 me-3 mt-3 mt-md-0 d-none d-md-block"
                style="border-radius: 20px; font-size: 12px;">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="24"
                    height="24" viewBox="0 0 24 24" stroke-width="1" stroke="gray" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                    <path d="M21 21l-6 -6" />
                </svg>
            </button>

            {{-- hides the screen on sm screen, display on md and lg screens --}}
            <button onclick="window.location.href='/donation'"
                class="btn btn-sm btn-warning text-light px-3 py-2 mt-3 mt-md-0 d-none d-md-block"
                style="border-radius:20px; font-size:12px;">
                SUPPORT
            </button>
        </nav>
    </div>

    <!-- Div to be displayed -->
    <div id="searchDiv" class="my-3 mt-5">

        <form action="{{ url('/search') }}" method="GET" class="w-100 d-flex" style="justify-content: center;">
            @csrf

            <div class="input-group w-50">
                <input id="search" name="search" placeholder="Search..."
                    value="{{ old('search', request('search')) }}" class="form-control rounded-0 py-2">
                <button type="submit" class="btn btn-sm border rounded-0">

                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="1" stroke="gray" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                        <path d="M21 21l-6 -6" />
                    </svg>

                </button>
            </div>
        </form>

    </div>

    <!-- JavaScript to toggle the div's display -->
    <script>
        // Get references to the button and the div
        const toggleButton = document.getElementById('toggleButton');
        const searchDiv = document.getElementById('searchDiv');

        // Add event listener to the button
        toggleButton.addEventListener('click', function() {
            // Toggle the display property of the div
            if (searchDiv.style.display === 'none') {
                searchDiv.style.display = 'block';
            } else {
                searchDiv.style.display = 'none';
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        //click on image to rediret to homepage
        document.getElementById('logo').addEventListener('click', function() {
            window.location.href = "/";
        });

        // Get the current URL path
        var path = window.location.pathname;

        // Find the corresponding navigation item and add the "active" class
        document.addEventListener('DOMContentLoaded', function() {
            var navItems = document.querySelectorAll('.nav-item a');
            navItems.forEach(function(item) {
                if (item.getAttribute('href') === path) {
                    item.parentNode.classList.add('active');
                }
            });
        });
    </script>

    <script>
        window.onscroll = function() {
            myFunction()
        };

        var navbar = document.getElementById("navbar");
        var realnav = document.getElementById("realnav");
        var sticky = navbar.offsetTop;

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
                realnav.classList.remove("border-bottom")
            } else {
                navbar.classList.remove("sticky");
                realnav.classList.add("border-bottom")
            }
        }
    </script>
</body>

</html>
