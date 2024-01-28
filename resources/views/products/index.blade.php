<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<a href="{{ route('products.create' )}}">Add in db new product</a>
    <table class="table table-striped table-dark">
        <thead class="thead-dark">
            <tr>
                <td>Name</td>
                <td>Price</td>
                <td>Description</td>
            </tr>
        <thead>
        @foreach ($prod as $row)
        <tr>
            <td>
                {{ $row->name }}
            </td>
            <td>
                {{ $row->price }}
            </td>
            <td>
                {{ $row->description }}
            </td>
            <td>  
                <a href="{{ url('products.edit/'.$row->id) }}">Edit</a>
            </td>
            <td>
                <a href="{{ url('products.delete/'.$row->id) }}">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>