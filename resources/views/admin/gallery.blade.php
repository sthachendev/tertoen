<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery</title>
</head>

<body>

    @if (auth()->check())
        <div class="container-fluid">
            <div class="row flex-nowrap">
                @include('admin.nav')
                <div class="col py-3" style="overflow-y: scroll; height:100vh">

                    <h3 style="margin-bottom: 20px; text-align: center">Gallery Images</h3>

                    <div class="text-center text-secondary">

                        <div class="center" style="padding: 2rem; margin: 0 auto; max-width: 800px;">

                            @if (Session::has('success'))
                                <div class="alert alert-success alert-dismissible fade show">
                                    {{ Session::get('success') }}
                                    <span class="close" style="cursor: pointer;"
                                        onclick="this.parentElement.style.display='none';" aria-label="Close">
                                        <span class="btn-close"></span>
                                    </span>
                                </div>
                            @endif

                            @if (Session::has('error'))
                                <div class="alert alert-danger alert-dismissible fade show ms-5 me-5">
                                    {{ Session::get('error') }}
                                    <span class="close" style="cursor: pointer;"
                                        onclick="this.parentElement.style.display='none';" aria-label="Close">
                                        <span class="btn-close"></span>
                                    </span>
                                </div>
                            @endif

                            <form method="POST" action="{{ route('img.add') }}" enctype="multipart/form-data"
                                style="margin-bottom: 20px; width: 100%;">
                                @csrf {{-- Cross-site Request Forgery protection --}}
                                <label for="name" style="float: left">Caption:</label>
                                <input type="text" id="name" name="name" required
                                    style="width: 100%; padding: 8px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px;">
                                <input type="hidden" id="post_by" name="post_by" value="{{ auth()->id() }}">
                                <br>

                                <div style="margin-bottom: 20px;">
                                    <label for="image"
                                        style="float: left; display: block; margin-bottom: 5px;">Image:</label>
                                    <input type="file" id="image" name="image"
                                        style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-size: 14px; width: 100%;">
                                </div>

                                <button type="submit"
                                    style="padding: 10px 20px; color: white; background:#4CAF50; border: none; border-radius: 4px; cursor: pointer;">
                                    Add
                                </button>
                            </form>

                            <hr>

                            @if (count($images) > 0)

                                <ul style="list-style: none; padding: 0; width: 100%;">
                                    @foreach ($images as $image)
                                        <li
                                            style="display: flex; align-items: center; justify-content: space-between; background-color: #fff; padding: 15px; border: 1px solid #ccc; border-radius: 4px; margin-bottom: 10px;">

                                            <div style="flex: 1;">
                                                @if ($image->image)
                                                    <a href="{{ asset($image->image) }}">
                                                        <img src="{{ asset($image->image) }}"
                                                            alt="{{ asset($image->name) }}"
                                                            style="max-width: 200px; border: 1px solid #ccc; border-radius: 4px;">
                                                    </a>
                                                @endif
                                            </div>

                                            <div style="flex: 1;">
                                                <p></strong> {{ $image->name }}</p>
                                            </div>

                                            <div>
                                                <form id="deleteForm{{ $image->id }}" method="post"
                                                    action="{{ route('image.delete', ['id' => $image->id]) }}">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="button" class="delete-button"
                                                        data-image-id="{{ $image->id }}"
                                                        style="background:#dc3545; color:#fff; padding: 10px; border: none; border-radius: 4px;">Delete
                                                        Image</button>
                                                </form>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                No images available
                            @endif
                        </div>

                        <dialog id="deleteDialog" class="bg-light p-4"
                            style="border-radius: 10px; border: 1px solid #ddd; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                            <p style="font-size: 16px; margin-bottom: 20px;">Are you sure you want to delete this image?
                            </p>
                            <button id="confirmDelete"
                                style="background-color: #dc3545; color: #fff; border: none; padding: 8px 16px; margin-right: 10px; border-radius: 5px; cursor: pointer;">Yes,
                                delete</button>
                            <button id="cancelDelete"
                                style="background-color: #ddd; color: #333; border: none; padding: 8px 16px; border-radius: 5px; cursor: pointer;">Cancel</button>
                        </dialog>

                    </div>
                </div>
            </div>
        </div>
    @else
        {{-- Content to show if the user is not logged in --}}
        <p style="text-align: center; margin-top: 50px;">Please login to access this content.</p>
    @endif

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            // Show the dialog on button click
            $('.delete-button').click(function() {
                var userId = $(this).data('image-id');
                var dialog = document.getElementById('deleteDialog');

                // Set up event listeners for the dialog buttons
                document.getElementById('confirmDelete').onclick = function() {
                    $('#deleteForm' + userId).submit();
                    dialog.close();
                };

                document.getElementById('cancelDelete').onclick = function() {
                    dialog.close();
                };

                dialog.showModal();
            });
        });
    </script>

</body>

</html>
