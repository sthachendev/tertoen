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

    <div class="area">
        Add events & activities

        <div class="container">
            <h2>Add New Activity</h2>
            <form action="{{ route('activities.store') }}" method="post" enctype="multipart/form-data">
                @csrf
    
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" required>
                </div>
    
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control" rows="4" required></textarea>
                </div>
    
                <div class="form-group">
                    <label for="photo">Photo</label>
                    <input type="file" name="photo" class="form-control-file">
                </div>
    
                <button type="submit" class="btn btn-primary">Add Activity</button>
            </form>
        </div>
        
    </div>

</body>
</html>