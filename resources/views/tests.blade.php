<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tests</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <style>
        .grid{
            display:grid;
            grid-template-columns: 30% 30% 30%;
            align-self: center;
        }
        h1{
            text-align: center;
            color: #0d6efd;
            font-weight: bolder;
            letter-spacing: 1.5px;
            margin: 10px;
            padding: 10px;
        }
    </style>
</head>
<body>
   {{----------------------NavBar------------------------}}
   @include('layouts.navbar')
   {{----------------------End NvaBar------------------------}}
    
    <h1>Tests</h1>
    <div class="container grid">
        @foreach ($tests as $test)
        <div class="card" style="width: 18rem;margin:10px;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $test->titre }}</h5>
                <p class="card-text">{{ $test->description }}</p>
                <p class="card-text">{{ $test->prix }} DT</p>
                <a href="#" class="btn btn-primary">Demand</a>
            </div>
        </div>
    @endforeach
    </div>
    

</body>
</html>