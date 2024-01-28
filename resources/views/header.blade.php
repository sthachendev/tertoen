<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @media (max-width: 767px) {
            .custom-bg {
                background-color: rgb(225, 239, 243);
                margin-top: 1rem;
                margin-left: 1rem;
                margin-right: 1rem;
            }

            .nav-item a {
                margin-top: 15px;
            }

            nav img {
                max-width: 12% !important;
            }

        }

        @media (max-width: 900px) {
            .nav-item a {
                margin-right: 0.5rem !important;
            }
        }

        .nav-item a {
            text-decoration: none;
            color: #1d1c1c;
            font-weight: 400;
            font-size: 12px;
            letter-spacing: 2px;
            position: relative;
            padding: 0.2rem;
            display: inline-block;
            transition: color 0.3s ease-in-out;
        }

        .nav-item a:after {
            content: "";
            position: absolute;
            width: 100%;
            height: 2px;
            background-color: #24408F;
            bottom: -5px;
            left: 0;
            transform: scaleX(0);
            transform-origin: bottom right;
            transition: transform 0.3s ease-in-out;
        }

        .nav-item.active a {
            color: #051b58;
        }

        .nav-item.active a:after {
            transform: scaleX(1);
            transform-origin: bottom left;
        }

        .nav-item a:hover {
            color: #24408F !important;
        }

        .nav-item a:hover:after {
            transform: scaleX(1);
            transform-origin: bottom left;
        }
    </style>

    {{-- anime on scroll --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css">
</head>

<body>

    <header style="background-color: #24408F;">

        <div class="d-flex justify-content-between ms-5 ">
            <!-- header above the navs -->
            <div class="d-flex justify-content-space-around align-items-center py-2">

                <div class="me-4 text-light d-none d-sm-inline" style="font-size:12px;">
                    <i class="fa-solid fa-phone me-1"></i>+975-17618421
                </div>

                <div class="me-3 text-light" style="font-size:12px">
                    <i class="fa-solid fa-envelope me-1"></i>info@peldrukdraling.org
                </div>
            </div>
            <!-- social media links -->
            <div style="background: #4F5B9E;" class="d-flex ps-3 py-2 me-5">
                <a href="https://www.facebook.com/YourFacebookPage"
                    class="text-light me-3 d-flex align-items-center justify-content-center text-decoration-none"
                    style="width: 30px; height: 30px; border-radius: 50%;">
                    <i class="fab fa-facebook"></i>
                </a>

                <a href="https://www.instagram.com/YourInstagramUsername"
                    class="text-light me-3 d-flex align-items-center justify-content-center text-decoration-none"
                    style="width: 30px; height: 30px; border-radius: 50%;">
                    <i class="fab fa-instagram"></i>
                </a>

                <a href="https://t.me/YourTelegramUsername"
                    class="text-light me-3 d-flex align-items-center justify-content-center text-decoration-none"
                    style="width: 30px; height: 30px; border-radius: 50%;">
                    <i class="fab fa-telegram-plane"></i>
                </a>

                {{-- <div class="d-none d-sm-inline">hides telegram icon on sm screen --}}
                <a href="https://wa.me/1234567890"
                    class="text-light me-3 d-flex align-items-center justify-content-center text-decoration-none"
                    style="width: 30px; height: 30px; border-radius: 50%;">
                    <i class="fab fa-whatsapp"></i>
                </a>
                {{-- </div> --}}
            </div>

        </div>

        {{-- nav bar --}}
        <nav class="navbar navbar-expand-md py-4" style="background:#fff; padding: 0 10% 0 10%;">

            {{-- <a href="/" class="navbar-brand d-none d-md-inline"> --}}
            <img src="{{ asset('images/logo.png') }}" alt="logo" style="max-width:7%;">
            {{-- </a> --}}

            <!-- icon when the nav collapse -->
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse justify-content-center custom-bg p-2" id="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/" class="text-decoration-none me-4">HOME
                            {{-- <span class="ms-3 text-muted d-none d-md-inline">|</span> --}}
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/lineage" class="text-decoration-none me-4">LINEAGE</a>
                    </li>

                    <li class="nav-item">
                        <a href="/centres" class="text-decoration-none me-4">CENTRES
                            {{-- <span class="ms-3 text-muted d-none d-md-inline">|</span> --}}
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/activities" class="text-decoration-none me-4">ACTIVITIES
                            {{-- <span class="ms-3 text-muted d-none d-md-inline">|</span> --}}
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/gallery" class="text-decoration-none me-4">GALLERY
                            {{-- <span class="ms-3 text-muted d-none d-md-inline">|</span> --}}
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/about-us" class="text-decoration-none me-4">ABOUT US
                            {{-- <span class="ms-3 text-muted d-none d-md-inline">|</span> --}}
                        </a>
                    </li>
                </ul>
                {{-- hides the btn on l=md and lg screens but displays on collapse --}}
                <button
                    onclick="window.location.href='/donate'"class="btn btn-sm btn-warning text-light px-3 py-2  mt-3 mt-md-0 d-md-none"
                    style="border-radius:20px; font-size:12px;">
                    DONATE
                </button>

            </div>
            {{-- hides the screen on sm screen, display on md and lg screens --}}
            <button onclick="window.location.href='/donate'"
                class="btn btn-sm btn-warning text-light px-3 py-2 mt-3 mt-md-0 d-none d-md-block"
                style="border-radius:20px; font-size:12px;">
                DONATE
            </button>

        </nav>

    </header>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
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
