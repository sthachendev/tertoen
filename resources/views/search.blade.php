<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centres</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css'>
    {{-- activity css --}}
    <link rel="stylesheet" href="{{ asset('css/activity.css') }}">
    {{-- gallery css --}}
    <link rel="stylesheet" href="{{ asset('css/gallery.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
</head>

<body>

    @Include('header')

    <h4 id="title" class="text-center text-secondary mt-5" style="font-weight: 400">
        Search Results
    </h4>

    <h5 id="title" class="text-center text-secondary my-3" style="font-weight: 300">
        Activities
    </h5>

    <div class="page">
        <div class="archive">
            @if (count($activities) > 0)
                @foreach ($activities as $activity)
                    <article class="article">
                        @if ($activity->photo)
                            <div style="text-align: center;">
                                <a href="/activities/{{ rawurlencode($activity->title) }}">
                                    <img src="data:image/jpeg;base64,{{ base64_encode($activity->photo) }}"
                                        alt="{{ $activity->title }}" style="max-width: 100%; display: inline-block;">
                                </a>
                            </div>
                        @endif

                        <h6 style="text-align: center; font-size: 20px; padding: 15px 0 0 0; font-weight: 325;">
                            <a href="/activities/{{ rawurlencode($activity->title) }}"
                                style="color: #000; text-decoration: none;">
                                {{ $activity->title }}
                            </a>
                        </h6>
                        <p style="text-align: center; color:gray; font-size: 14px;">
                            {{ $activity->created_at->format('Y-m-d') }}
                        </p>

                        <p
                            style="text-align: justify; line-height: 29px; font-size: 14px; padding: 5px 0; color: rgb(87, 86, 86);">
                            {{ Illuminate\Support\Str::limit($activity->description, $limit = 330, $end = ' ...') }}
                        </p>

                    </article>
                @endforeach
            @else
                <div style="height: 2vh" class="text-center text-secondary mb-5">
                    No Activities available
                </div>
            @endif
        </div>
    </div>

    <div>

        <h5 id="title" class="text-center text-secondary my-4" style="font-weight: 300">
            Gallery
        </h5>
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
            <div style="height: 2vh" class="text-center text-secondary mb-5">
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
