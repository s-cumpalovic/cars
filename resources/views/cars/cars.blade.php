@extends ('layouts.master');

@section('title', 'Car blog');

@section('content')


    <h2>Models of cars currently available:</h2><br><br>
    @foreach($cars as $car)
        <a href="{{ route('single-car-route', ['id' => $car->id]) }}">
            Model: {{$car->title}}
        <a>
            Produced by: {{$car->producer}}
            <br><br><hr>
    <h2>
        
    @endforeach
</body>
</html>
@endsection