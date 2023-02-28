<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME')}}</title>

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
                <div class="card">
                    <div class="comic-card">
                        <img src="{{ $card['thumb'] }}" :alt="card.series">
                        <h4>{{ $card['series'] }} </h4>
                    </div>
                </div>
            @endforeach 

            <button class="btn-blue">Load more</button>
        </div>
    </main>


   

    @include('includes.shop')

    {{-- Footer  --}}
    @include('includes.footer')
</body>
</html>