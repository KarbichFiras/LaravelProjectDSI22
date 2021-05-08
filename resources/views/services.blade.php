<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tests</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    ²
</head>

<body>
    {{----------------------NavBar------------------------}}
    @include('layouts.navbar')
    {{----------------------End NvaBar------------------------}}
<style>
    .crd{
        min-height: 200px;
    }
</style>
    <h1>Tests</h1>
    <div class="container">
    <div class="row">
    @foreach ($Services as $service)
    <div class="col-lg-4 col-md-6 justify-content-center align-items-center my-3">
    <div class="card crd">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $service->titre }}</h5>
                <p class="card-text">{{ $service->description }}</p>
                <a href="#" class="btn btn-primary my-btn">Add to card</a>
            </div>
        </div>
    </div>
        @endforeach
    </div>
        
    </div>


</body>

</html>