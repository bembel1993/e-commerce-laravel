<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <form action="{{ route('addindb')}}" method="POST">
        @csrf
        <input type="text" id="name" name="name"><br>
        <input type="number" id="price" name="price"><br>
        <input type="text" id="description" name="description"><br><br>

        <button type="submit" id="add-btn" name="add-btn">
            Add
        </button>
    </form>
</body>
</html>