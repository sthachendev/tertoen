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
            /* box-shadow:
                0 5px 10px rgba(0, 0, 0, 0.1),
                0 20px 20px rgba(0, 0, 0, 0.05); */
        }
    </style>
</head>

<body>

    @include('header')

    <div class="page">
        <div class="archive">
            @if ($activity)
                <article class="article">

                    <h6 style="font-size: 20px; padding: 0; font-weight: 325;">
                        {{ $activity->title }}
                    </h6>

                    <p style="color: gray; font-size: 14px;">
                        {{ $activity->created_at->format('Y-m-d') }}
                    </p>

                    @if ($activity->photo)
                        <img src="{{ asset($activity->photo) }}" alt="{{ $activity->title }}" style="max-width: 100%;">
                    @endif

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
