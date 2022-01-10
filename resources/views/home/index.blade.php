<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BoolyAirlines</title>
    @include("partials.header_scripts")
</head>

<body>
    <header>
        <nav class="navbar bg-light">
            <div class="container-fluid justify-content-center">
                <a class="navbar-brand" href="#">
                    BoolyAirlines
                </a>
            </div>
        </nav>
    </header>
    <main>
        <div class="py-4 d-flex flex-wrap justify-content-center">
            @foreach ($travels as $travel)
            <div class="card col-3 m-2 text-center">
                <div class="card-body">
                    <h5 class="card-text">City: {{$travel->city}}</h5>
                    <img src="{{$travel->image_path}}" class="card-img-top" alt="{{$travel->city}}">
                    <h5 class="card-text">Gate: {{$travel->gate}}</h5>
                    <h5 class="card-text">Departure: {{$travel->departure}}</h5>
                    <h5 class="card-text">Arrival: {{$travel->arrival}}</h5>
                    <h5 class="card-text">Price: ${{$travel->price}}</h5>
                </div>
            </div>
            @endforeach
        </div>
    </main>

</body>

</html>