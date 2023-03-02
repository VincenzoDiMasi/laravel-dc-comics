<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME')}} | Home</title>

    @vite('resources/js/app.js')
</head>
<body>
    {{-- Header --}}
    @include('includes.header')
{{-- Jumbo --}}
    @include('includes.jumbotron')

    {{-- Main --}}
    <main>
        <div class="card-container">
           
            @foreach ($cards as $card)
               <div class="card" style="width: 18rem;">
                    <img class="img-fluid" src="{{ $card['thumb'] }}" :alt="$card.series">
                    <div class="card-body">
                        <h4>{{ $card['series'] }} </h4>
                    </div>
                </div>
            @endforeach 

            <div class="d-flex justify-content-center">
                <button class="btn-blue">Load more</button>
                <a class="btn-success btn ms-3 btn-add" href="{{route('comics.create')}}">Add new comic</a>
            </div>
        </div>
    </main>


   

    @include('includes.shop')

    {{-- Footer  --}}
    @include('includes.footer')
</body>
</html>