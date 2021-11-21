<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products Page</title>



</head>
<body>
    
<ul>
    @for ($i = 0; $i<count($products); $i++)
    <li>{{$products[$i]}}</li>

@endfor
<br>
@foreach ($products as $key => $product )
<li>{{$key}} - {{$product}}</li>

@endforeach
<br>
@foreach ($products as $key => $product )
@if ($key ==1)
<li>{{$key}} - {{$product}}</li>
@endif


@endforeach
</ul>

</body>

</html>
