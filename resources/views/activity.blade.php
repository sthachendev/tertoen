<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity</title>
    {{-- activity css --}}
    <link rel="stylesheet" href="{{ asset('css/activity.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
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

                    @if ($activity->photo)
                        <div style="text-align: center;" class="">
                            <img src="data:image/jpeg;base64,{{ base64_encode($activity->photo) }}"
                                alt="{{ $activity->title }}" style="max-width: 100%; display: inline-block;">
                        </div>
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
