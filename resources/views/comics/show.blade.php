<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Details</title>

    @vite('resources/js/app.js')
</head>
<body>
    @include('includes.header')

    @include('includes.jumbotron')

    <section id="details" class="bg-white p-5">


        <div class="container d-flex flex-column justify-content-center">

                <h1 class="text-primary text-center">
                    {{$comic->title}}
                </h1>

                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container">
                    <a class="navbar-brand" href="#">Price: {{$comic->price}}</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item">
                            <a class="nav-link" href="#">AVAILABLE</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Availability
                            </a>
                    </div>
                </nav>

                <p class="w-50 mx-auto">
                    {{$comic->description}}
                </p>

                <div class="artists w-50 mx-auto">
                    <h3 class="text-center py-3">
                        Artists:
                    </h3>

                    <p class="text-primary">
                        {{$comic->artists}}
                    </p>
                </div>

                <div class="writers w-50 mx-auto">
                    <h3 class="text-center py-3">
                        Writers:
                    </h3>

                    <p class="text-primary">
                        {{$comic->writers}}
                    </p>
                </div>

                <div class="buttons d-flex justify-content-center">
                    <a class="btn btn-primary" href="{{route('main')}}">Home</a>
                    <a class="btn-warning btn ms-3" href="{{route('comics.edit', $comic->id)}}">Edit</a>
            </div>
        </div>
    </section>

</body>
</html>