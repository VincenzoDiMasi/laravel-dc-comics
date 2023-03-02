<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add a Comic</title>

    @vite('resources/js/app.js')

</head>
<body>
    <h1 class="text-primary text-center py-4">
        Add a Comic!
    </h1>
    <div class="container p-5">
        <form class="w-100 row text-center">
            <div class="mb-4 col-12">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control text-center" id="title" placeholder="Title">
            </div>

            <div class="mb-3 col-12">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" rows="3" placeholder="Description"></textarea>
            </div>

            <div class="mb-3 col-6">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control text-center" id="thumb" placeholder="Thumbnail URL">
            </div>

            <div class="mb-3 col-6">
                <label for="price" class="form-label">Price</label>
                <input type="number" min="0" class="form-control text-center" id="price" placeholder="Price">
            </div>

            <div class="mb-3 col-4">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control text-center" id="series" placeholder="Series">
            </div>

            <div class="mb-3 col-4">
                <label for="sales_date" class="form-label">Sales Date</label>
                <input type="text" class="form-control text-center" id="sales_date" placeholder="Sales Date">
            </div>

            <div class="mb-3 col-4">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control text-center" id="type" placeholder="Type">
            </div>

            <div class="mb-3 col-6">
                <label for="artists" class="form-label">Artists</label>
                <textarea class="form-control text-center" id="artists" rows="3" placeholder="Artists"></textarea>
            </div>

            <div class="mb-3 col-6">
                <label for="writers" class="form-label">Writers</label>
                <textarea class="form-control text-center" id="writers" rows="3" placeholder="Writers"></textarea>
            </div>


            <div class="mb-3 form-check">
            </div>

            <div class="col-12 d-flex justify-content-between">
                <button type="submit" class="btn btn-primary col-3">Go!</button>
                <a type="submit" class="btn btn-secondary col-3" href="{{route('comics.index')}}"> Go back </a>
            </div>

            <div class="col-6">
            </div>

          </form>
    </div>
</body>
</html>