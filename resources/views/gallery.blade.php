<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css'>
    {{-- gallery css --}}
    <link rel="stylesheet" href="{{ asset('css/gallery.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
</head>

<body>

    @Include('header')

    {{-- <h5 style="font-weight: 100" class="text-center mb-4">Gallery</h5> --}}

    <div class="text-center text-secondary mt-5">
        @if (count($images) > 0)
            <main class="main">
                <div class="container mb-5">
                    @foreach ($images as $image)
                        <div class="card">
                            <div class="card-image">
                                <a href="data:image/jpeg;base64,{{ base64_encode($image->image) }}"
                                    data-fancybox="gallery" data-caption="{{ $image->name }}">
                                    <img src="data:image/jpeg;base64,{{ base64_encode($image->image) }}"
                                        alt="{{ $image->name }}">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </main>
        @else
            <div class="mb-5">
                No images available

            </div>
        @endif
    </div>

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
