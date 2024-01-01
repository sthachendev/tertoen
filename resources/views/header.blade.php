<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Background color for small screens */
        @media (max-width: 575.98px) {
            .custom-bg {
                background-color: rgb(225, 239, 243);
                /* Change this to your desired color for small screens */
            }
        }
    </style>
    {{-- anime on scroll --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css">
</head>

<body>

    <header style="background-color: #24408F;">

        <div class="d-flex justify-content-around">
            <!-- header above the navs -->
            <div class="d-flex justify-content-space-around align-items-center ps-3 py-2">
                <div class="me-4 text-light" style="font-size:12px;">
                    <i class="fa-solid fa-phone me-1"></i>+975-17618421
                </div>
                <div class="me-3 text-light" style="font-size:12px">
                    <i class="fa-solid fa-envelope me-1"></i>info@peldrukdraling.org
                </div>
            </div>
            <!-- social media links -->
            <div style="background: #4F5B9E;" class="d-flex ps-3 py-2">
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

                <div class="d-none d-sm-inline">{{-- hides telegram icon on sm screen --}}
                    <a href="https://t.me/YourTelegramUsername"
                        class="text-light me-3 d-flex align-items-center justify-content-center text-decoration-none"
                        style="width: 30px; height: 30px; border-radius: 50%;">
                        <i class="fab fa-telegram-plane"></i>
                    </a>
                </div>

                <a href="https://wa.me/1234567890"
                    class="text-light me-3 d-flex align-items-center justify-content-center text-decoration-none"
                    style="width: 30px; height: 30px; border-radius: 50%;">
                    <i class="fab fa-whatsapp"></i>
                </a>
            </div>

        </div>

        {{-- nav bar --}}
        <nav class="navbar navbar-expand-md py-4" style="background:#fff; padding: 0 10% 0 10%;">

            <a href="/" class="navbar-brand">
                <img src="{{ asset('images/logo.png') }}" alt="logo" style="width:70%">
            </a>

            <!-- icon when the nav collapse -->
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse justify-content-center custom-bg p-3 p-md-0" id="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/" class="text-dark text-decoration-none me-3" style="font-size:12px">Home
                            <span class="ms-3 text-muted d-none d-md-inline">|</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/about-us" class="text-dark text-decoration-none me-3" style="font-size:12px">About Us
                            <span class="ms-3 text-muted d-none d-md-inline">|</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/centres" class="text-dark text-decoration-none me-3" style="font-size:12px">Centres
                            <span class="ms-3 text-muted d-none d-md-inline">|</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/activities" class="text-dark text-decoration-none me-3" style="font-size:12px">Activities
                            <span class="ms-3 text-muted d-none d-md-inline">|</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/gallery" class="text-dark text-decoration-none me-3" style="font-size:12px">Gallery
                            <span class="ms-3 text-muted d-none d-md-inline">|</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/lineage" class="text-dark text-decoration-none" style="font-size:12px">Lineage</a>
                    </li>
                </ul>
                {{-- hides the btn on l=md and lg screens but displays on collapse --}}
                <button onclick="window.location.href='/donate'"class="btn btn-sm btn-warning text-light px-3 py-2  mt-3 mt-md-0 d-md-none"
                    style="border-radius:20px; font-size:12px;">
                    Donate
                </button>

            </div>
            {{-- hides the screen on sm screen, display on md and lg screens --}}
            <button onclick="window.location.href='/donate'" class="btn btn-sm btn-warning text-light px-3 py-2  mt-3 mt-md-0 d-none d-md-block"
                style="border-radius:20px; font-size:12px;">
                Donate
            </button>

        </nav>

    </header>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
