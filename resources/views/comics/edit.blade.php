<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit a comic!</title>

    @vite('resources/js/app.js')

</head>
<body>
    <h1 class="text-primary text-center py-4">
        Edit Comic
    </h1>
    <div class="container p-5">
        <form method="POST" action="{{route('comics.update', $comic->id)}}" class="w-100 row text-center">
            @method('PUT')
            @csrf

            <div class="mb-4 col-12">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control text-center" id="title" placeholder="Title" name="title" value="{{old('title', $comic->title)}}">
            </div>

            <div class="mb-3 col-12">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" rows="3" placeholder="Description" name="description">{{old('description', $comic->description)}}</textarea>
            </div>

            <div class="mb-3 col-6">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="url" class="form-control text-center" id="thumb" placeholder="Thumbnail's url image" name="thumb" value="{{old('thumb', $comic->thumb)}}">
            </div>

            <div class="mb-3 col-6">
                <label for="price" class="form-label">Price</label>
                <input type="text" min="0" class="form-control text-center" id="price" placeholder="Price" name="price" value="{{old('price', $comic->price)}}">
            </div>

            <div class="mb-3 col-4">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control text-center" id="series" placeholder="Comic's Series" name="series" value="{{old('series', $comic->series)}}">
            </div>

            <div class="mb-3 col-4">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="text" class="form-control text-center" id="sale_date" placeholder="Sale" name="sale_date" value="{{old('sale_date', $comic->sale_date)}}">
            </div>

            <div class="mb-3 col-4">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control text-center" id="type" placeholder="Type" name="type" value="{{old('type', $comic->type)}}">
            </div>

            <div class="mb-3 col-6">
                <label for="artists" class="form-label">Artists</label>
                <textarea class="form-control text-center" id="artists" rows="3" placeholder="Artists" name="artists">{{old('artists', $comic->artists)}}</textarea>
            </div>

            <div class="mb-3 col-6">
                <label for="writers" class="form-label">Writers</label>
                <textarea class="form-control text-center" id="writers" rows="3" placeholder="Writers" name="writers" >{{old('writers', $comic->writers)}}</textarea>
            </div>


            <div class="mb-3 form-check">
            </div>

            <div class="col-12 d-flex justify-content-between">
                <button type="submit" class="btn btn-primary col-3">Edit</button>
                <a type="submit" class="btn btn-secondary col-3" href="{{route('comics.index')}}"> Go back </a>
            </div>

            <div class="col-6">
            </div>

          </form>
    </div>
</body>
</html>