<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
         @vite('resources/js/app.js')
    </head>
    <body>
        <h1>Lista Movies</h1>
        <div class="container">
            <div class="row">
                @foreach ($movies as $movie)
                <div class="col col-md-4 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">{{$movie->title}}</h5>
                          <p class="card-text">{{$movie->original_title}}</p>
                          <p class="card-text">{{$movie->nationality}}</p>
                          <p class="card-text">{{$movie->vote}}</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                </div>
                @endforeach
            </div>
        </div>

    </body>
</html>
