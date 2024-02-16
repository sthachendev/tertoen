<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        p {
            font-size: 14px;
            text-align: justify;
            line-height: 1.5;
        }
    </style>
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
</head>

<body>

    @Include('header')

    @Include('home-content')

    @Include('footer')

</body>

</html>
