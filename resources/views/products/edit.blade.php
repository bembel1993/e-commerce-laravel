<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <form action="{{ url('editindb/'.$prod->id) }}" method="POST">
    @csrf
    @method('PUT')
        <input type="text" id="name" name="name" value="{{$prod->name}}"><br>
        <input type="number" id="price" name="price" value="{{$prod->price}}"><br>
        <input type="text" id="description" name="description" value="{{$prod->description}}"><br><br>

        <button type="submit" id="update-btn" name="update-btn">
            Update
        </button>
    </form>
</body>
</html>