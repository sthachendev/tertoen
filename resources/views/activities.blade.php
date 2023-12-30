<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activities</title>
    <style>
        body {
            color: #777;
            font-family: sans-serif;
            line-height: 1.15;
        }

        hr {
            /*dummy content*/
            height: 6px;
            border: none;
            background: rgba(0, 0, 0, 0.1);
        }

        hr:last-child {
            /*dummy content*/
            margin-right: 60%;
        }

        hr.image {
            /*dummy content*/
            padding-bottom: 50%;
        }

        .page {
            padding: 2em 8rem;
            background: #cecece;
            max-width: 100vw;
        }

        .archive {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(380px, 1fr));
            grid-gap: 2em;
        }

        .article {
            padding: 1em;
            background: #fff;
            box-shadow:
                0 5px 10px rgba(0, 0, 0, 0.1),
                0 20px 20px rgba(0, 0, 0, 0.05);
        }
    </style>
</head>

<body>

    @Include('header')

    {{-- <div style="height: 25vh" class="text-center text-secondary mt-5">
        No Activities available
    </div> --}}

    <div class="page">
        <div class="archive">
            @foreach ($activities as $activity)
                <article class="article">
                    @if ($activity->photo)
                        <img src="{{ asset($activity->photo) }}" alt="{{ asset($activity->photo) }}"
                            style="max-width: 100%; border: 1px solid #ccc; border-radius: 4px;">
                    @endif
                    <h5 class="card-title">{{ $activity->title }}</h5>
                    <p class="card-text">{{ $activity->description }}</p>
                </article>
            @endforeach
        </div>
    </div>

    @Include('footer')

</body>

</html>
