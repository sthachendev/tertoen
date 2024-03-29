<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Include Poppins font from Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            /* font-family: 'Roboto', sans-serif; */
            font-family: 'Poppins', sans-serif;
            /* font-family: 'Lato', sans-serif; */

        }

        main {
            flex: 1;
        }
    </style>

</head>

<body>

    <footer class="text-light py-4" style="background: #24408F url('{{ asset('images/cloud.png') }}');">
        <div class="container">
            <div class="row p-3">
                <!-- Left side with text logo and social media icons -->
                <div class="col-md-6 text-md-start mb-3 mb-md-0" id="text-logo">
                    <span class="fw-bold fs-4 text-light">
                        BAYUEL KINZANG WOESEL CHOLING
                        <br>
                        FOUNDATION
                    </span>
                    <div class="mt-4 d-flex">
                        <a href="https://www.facebook.com/profile.php?id=100093656465335&mibextid=ZbWKwL"
                            class="text-light me-4 d-flex align-items-center justify-content-center text-decoration-none"
                            style="background: #4F5B9E; width: 30px; height: 30px; border-radius: 50%;" target="_blank"
                            rel="noopener noreferrer">
                            <i class="fab fa-facebook"></i>
                        </a>

                        <a href="https://t.me/+NnaNv2k7GW9hY2Zl"
                            class="text-light me-4 d-flex align-items-center justify-content-center text-decoration-none"
                            style="background: #4F5B9E; width: 30px; height: 30px; border-radius: 50%;" target="_blank"
                            rel="noopener noreferrer">
                            <i class="fab fa-telegram-plane"></i>
                        </a>

                        <a href="https://wa.me/77600980"
                            class="text-light me-4 d-flex align-items-center justify-content-center text-decoration-none"
                            style="background: #4F5B9E; width: 30px; height: 30px; border-radius: 50%;" target="_blank"
                            rel="noopener noreferrer">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                    {{-- <div class="my-4 d-flex">
                        <a href="/volunteer" class="text-light text-decoration-none">BKWC Foundation Voluntary Services
                            Form</a>
                    </div> --}}
                    {{-- <div class="my-4 d-flex">
                        <a href="/admin/login" class="text-light text-decoration-none">Admin login</a>
                    </div> --}}
                </div>

                <!-- Right side with quick links -->
                <div class="col-md-6 text-md-end" style="background:rgba(79, 91, 158, 0.5);">
                    <div class="d-flex justify-content-around p-3">

                        <div class="d-flex flex-column p-2 text-start">
                            <h6 class="text-light mb-3 border-0 border-secondary">CONTACT US</h6>
                            <span class="text-light text-decoration-none mb-3" style="font-size:14px">Flat No.32,
                                Building No.5, Changzamtog, Thim Throm, Thimphu 11001,
                                Bhutan</span>
                            <span class="text-light mb-3" style="font-size:14px">
                                EMAIL:
                                <a href="mailto:drukbkwcfoundation@gmail.com"
                                    class="text-light text-decoration-none">drukbkwcfoundation@gmail.com</a>
                            </span>
                            <span class="text-light text-decoration-none" style="font-size:14px">PHONE:
                                +975-77600980</span>
                        </div>

                    </div>
                </div>
            </div>

            <hr>
            <div class="text-center" style="font-size:12px"> &copy 2024 BAYUEL KINZANG WOESEL CHOLING FOUNDATION</div>
        </div>
    </footer>

    <!-- Include JavaScript for loading indicator -->
    <script src="{{ asset('js/loading.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
