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

</head>

<body>

    <!-- Loading Indicator -->
    <div id="loading" class="loading">
        <img src="{{ asset('images/wheel1.png') }}" alt="Loading..." class="spinner">
    </div>

    <header style="background: #24408F url('{{ asset('images/cloud.png') }}');">

        <div class="d-flex justify-content-between ms-5 ">
            <!-- header above the navs -->
            <div class="d-flex justify-content-space-around align-items-center py-2">

                <div class="me-4 text-light d-none d-sm-inline" style="font-size:12px;">
                    <i class="fa-solid fa-phone me-1"></i>+975-77600980
                </div>

                <div class="me-3 text-light" style="font-size:12px">
                    <i class="fa-solid fa-envelope me-1"></i>
                    <a href="mailto:drukbkwcfoundation@gmail.com" class="text-light"
                        style="text-decoration: none;">drukbkwcfoundation@gmail.com</a>
                </div>

            </div>
            <!-- social media links -->
            <div style="background: rgba(79, 91, 158, 0.5);" class="d-flex ps-3 py-2 me-5">
                <a href="https://www.facebook.com/profile.php?id=100093656465335&mibextid=ZbWKwL"
                    class="text-light me-3 d-flex align-items-center justify-content-center text-decoration-none"
                    style="width: 30px; height: 30px; border-radius: 50%;">
                    <i class="fab fa-facebook"></i>
                </a>

                <a href="https://t.me/+NnaNv2k7GW9hY2Zl"
                    class="text-light me-3 d-flex align-items-center justify-content-center text-decoration-none"
                    style="width: 30px; height: 30px; border-radius: 50%;">
                    <i class="fab fa-telegram-plane"></i>
                </a>

                <a href="https://wa.me/77600980"
                    class="text-light me-3 d-flex align-items-center justify-content-center text-decoration-none"
                    style="width: 30px; height: 30px; border-radius: 50%;">
                    <i class="fab fa-whatsapp"></i>
                </a>
            </div>

        </div>

        {{-- nav bar --}}
        <nav class="navbar navbar-expand-md py-4"
            style="
        background: #fff url('{{ asset('images/wheel.png') }}') right/cover no-repeat;
         background-size: auto 80%;
          padding: 0 10% 0 10%;">

            <img id="logo" src="{{ asset('images/logo.png') }}" alt="logo"
                style="max-width: 7%; cursor: pointer;">

            <!-- icon when the nav collapse -->
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse justify-content-center custom-bg p-2" id="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/" class="text-decoration-none me-4">HOME
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/lineage" class="text-decoration-none me-4">LINEAGE</a>
                    </li>

                    <li class="nav-item">
                        <a href="/activities" class="text-decoration-none me-4">ACTIVITIES
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/gallery" class="text-decoration-none me-4">GALLERY
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/oraganogram" class="text-decoration-none me-4">ORAGANOGRAM
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/about-us" class="text-decoration-none me-4">ABOUT US
                        </a>
                    </li>

                </ul>

                {{-- hides the btn on l=md and lg screens but displays on collapse --}}
                <button
                    onclick="window.location.href='/donate'"class="btn btn-sm btn-warning text-light px-3 py-2  mt-3 mt-md-0 d-md-none"
                    style="border-radius:20px; font-size:12px;">
                    SUPPORT
                </button>
            </div>

            <!-- Button -->
            <button id="toggleButton" class="btn btn-sm text-light px-5 py-2 mt-3 mt-md-0 d-none d-md-block"
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
            <button onclick="window.location.href='/donate'"
                class="btn btn-sm btn-warning text-light px-3 py-2 mt-3 mt-md-0 d-none d-md-block"
                style="border-radius:20px; font-size:12px;">
                SUPPORT
            </button>

        </nav>

    </header>

    <!-- Div to be displayed -->
    <div id="searchDiv" class="my-3">

        <form action="{{ url('/search') }}" method="GET" class="w-100 d-flex" style="justify-content: center;">
            @csrf

            <div class="input-group w-50">
                <input id="search" name="search" placeholder="Search..."
                    value="{{ old('search', request('search')) }}" class="form-control rounded-0 py-2">
                <button type="submit" class="btn btn-sm border rounded-0">

                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="gray"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
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
</body>

</html>
