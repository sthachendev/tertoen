<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add events & activities</title>
</head>

<body>
    @include('admin.nav')

    <div class="area" style="overflow-x: auto; height:90vh">
        Add images to Gallery

        <form method="POST" action="{{ route('img.add') }}" enctype="multipart/form-data"
            style="margin-bottom: 20px; width: 100%;">
            @csrf {{-- Cross-site Request Forgery protection --}}
            <label for="name" style="font-weight: bold;">Image Caption:</label>
            <input type="text" id="name" name="name" required
                style="width: 100%; padding: 8px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px;">

            <div style="margin-bottom: 20px;">
                <label for="image" style="font-weight: bold; display: block; margin-bottom: 5px;">Image:</label>
                <input type="file" id="image" name="image"
                    style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-size: 14px; width: 100%;">
            </div>

            <button type="submit"
                style="padding: 10px 20px; color: white; background:#4CAF50; border: none; border-radius: 4px; cursor: pointer;">
                Add Image
            </button>
        </form>

        <div class="text-center text-secondary">
            @if (count($images) > 0)
                <main class="main">
                    <div class="container" data-aos="fade-right">
                        @foreach ($images as $image)
                            <a href="{{ asset($image->image) }}">
                                <img src="{{ asset($image->image) }}" alt="{{ $image->name }}" style="width:60%">
                            </a>
                        @endforeach
                    </div>
                </main>
            @else
                No images available
            @endif

        </div>
</body>

</html>
