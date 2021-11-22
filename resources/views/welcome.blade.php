<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
</head>

<body>
    <ul>
        @foreach ($products as $product)
            <li><a href="{{ url('product/'.$product) }}">Product {{$product}}</a></li>

        @endforeach

    </ul>
    <br>
    <ul>
        @foreach ($products as $product)
            <li><a href="{{ route('website.product-detail',['product_id'=>$product])}}">Product{{$product}}</a></li>

        @endforeach

    </ul>
</body>

</html>
