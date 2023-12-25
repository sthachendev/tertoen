<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
</head>

<body>

    @Include('header')

    <div style="height: 25vh" class="text-center text-secondary mt-5">
No images available
    </div>
    <h2>Create Image</h2>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
    
        <label for="caption">Caption:</label>
        <input type="text" name="caption" id="caption" required>
    
        <br>
    
        <label for="photo">Photo:</label>
        <input type="file" name="photo" id="photo" accept="image/*" required>
    
        <br>
    
        <button type="submit">Upload Image</button>
    </form>
    @Include('footer')

</body>

</html>
