<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centres</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css'>
    <style>
        p {
            font-size: 14px;
            text-align: justify;
            line-height: 1.5;
        }

        body {
            color: #777;
            font-family: sans-serif;
            line-height: 1.15;
        }

        @media (max-width: 769px) {
            .page {
                padding: 0 !important;
            }
        }

        .page {
            padding: 2em 8rem;
            padding-top: 0;
            max-width: 100vw;
        }

        .archive {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(380px, 1fr));
            grid-gap: 2em;
        }

        .article {
            padding: 1em;
        }
    </style>
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
            margin: 0 auto;
            /* padding: 4rem 2rem; */
            /* padding-top: 2rem !important; */
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

    <h4 id="title" class="text-center text-secondary" style="font-weight: 400">
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
                                    <img src="{{ asset($activity->photo) }}" alt="{{ $activity->title }}"
                                        style="max-width: 100%; display: inline-block;">
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
                                <a href="{{ asset($image->image) }}" data-fancybox="gallery"
                                    data-caption="{{ $image->name }}">
                                    <img src="{{ asset($image->image) }}" alt="{{ $image->name }}">
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
