<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css'>
    <style>
        *,
        *::before,
        *::after {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            list-style: none;
            list-style-type: none;
            text-decoration: none;
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
        }

        .cd__main {
            display: block !important;
        }

        .container {
            max-width: 80rem;
            width: 100%;
            padding: 4rem 2rem;
            margin: 0 auto;
            padding-top: 2rem !important;
        }

        .main .container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 1rem;
            justify-content: center;
            align-items: center;
        }

        .main .card {
            color: #252a32;
            border-radius: 2px;
            background: #ffffff;
            /* box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 3px rgba(0, 0, 0, 0.24); */
        }

        .main .card-image {
            position: relative;
            display: block;
            width: 100%;
            padding-top: 70%;
            background: #ffffff;
        }

        .main .card-image img {
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        @media only screen and (max-width: 600px) {
            .main .container {
                display: grid;
                grid-template-columns: 1fr;
                grid-gap: 1rem;
            }
        }
    </style>
</head>

<body>

    @Include('header')

    <h5 style="font-weight: 100" data-aos="fade-right" class="text-center">Gallery</h5>

    <div class="text-center text-secondary">
        @if (count($images) > 0)
            <main class="main">
                <div class="container" data-aos="fade-right">
                    @foreach ($images as $image)
                        <div class="card">
                            <div class="card-image">
                                <a href="{{ asset($image->image) }}" data-fancybox="gallery" data-caption="{{ $image->name }}">
                                <img src="{{ asset($image->image) }}" alt="{{ $image->name }}">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </main>
        @else
            No images available
        @endif

        <form method="POST" action="{{ route('img.add') }}" enctype="multipart/form-data"
            style="margin-bottom: 20px; width: 100%;">
            @csrf {{-- Cross-site Request Forgery protection --}}
            <label for="name" style="font-weight: bold;">Product Name:</label>
            <input type="text" id="name" name="name" required
                style="width: 100%; padding: 8px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px;">

            <div style="margin-bottom: 20px;">
                <label for="image" style="font-weight: bold; display: block; margin-bottom: 5px;">Image:</label>
                <input type="file" id="image" name="image"
                    style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-size: 14px; width: 100%;">
            </div>

            <button type="submit"
                style="padding: 10px 20px; color: white; background:#4CAF50; border: none; border-radius: 4px; cursor: pointer;">Add
                Product</button>
        </form>
        @Include('footer')
        <script>
            // Fancybox Configuration
            $('[data-fancybox="gallery"]').fancybox({
                buttons: [
                    // "slideShow",
                    // "thumbs",
                    "zoom",
                    "fullScreen",
                    // "share",
                    "close"
                ],
                loop: false,
                protect: true
            });
        </script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js'></script>

</body>

</html>
