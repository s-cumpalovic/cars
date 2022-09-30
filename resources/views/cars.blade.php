<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- @dd($cars); --}}
    <h2>Models of cars currently available</h2>
    @foreach($cars as $car)
    <h3>
        Model: {{$car->title}}
        Produced by: {{$car->producer}}
    </h3>
    @endforeach
</body>
</html>