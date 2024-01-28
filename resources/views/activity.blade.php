<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity</title>
    <style>
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
            /* background: #e2dddd; */
            max-width: 100vw;
        }

        .archive {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(380px, 1fr));
            grid-gap: 2em;
        }

        .article {
            padding: 1em 4em;
            padding-top: 0;
            background: #fff;
        }
    </style>
</head>

<body>

    @include('header')

    <div class="page">
        <div class="archive">
            @if ($activity)
                <article class="article">

                    <h6 style="font-size: 20px; padding: 0; font-weight: 325;" class="text-center">
                        {{ $activity->title }}
                    </h6>

                    <p style="color: gray; font-size: 14px;" class="text-center">
                        {{ $activity->created_at->format('Y-m-d') }}
                    </p>

                    <div style="text-align: center;" class="border">
                        <img src="{{ asset($activity->photo) }}" alt="{{ $activity->title }}"
                            style="max-width: 100%; display: inline-block;">
                    </div>

                    <p
                        style="text-align: justify; line-height: 29px; font-size: 14px; padding: 15px 0; color: rgb(87, 86, 86);">
                        {{ $activity->description }}
                    </p>
                </article>
            @else
                <div style="height: 25vh" class="text-center text-secondary mt-5">
                    No Activity available
                </div>
            @endif
        </div>
    </div>

    @include('footer')

</body>

</html>
