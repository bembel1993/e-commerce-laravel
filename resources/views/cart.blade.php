<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
    @foreach(Cart::content() as $item)
        <div>
            <h4>{{ $item->name }}</h4>
            <p>Price: ${{ $item->price }}</p>
            <a href="{{ route('cart.remove', $item->model) }}">Remove</a>
        </div>
    @endforeach
    <div>
        <p>Total: ${{ Cart::total() }}</p>
    </div>
</body>
</html>