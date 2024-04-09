<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Includiamo gli assets con la direttiva vite -->
    @vite('resources/js/app.js')

</head>

<body>
    <div class="container">
        <h1>cioa a tutti!</h1>
        <h2>tutti i film del nostro database:</h2>
    </div>

    <div class="container">
        
        <ul>
            @foreach ($movies as $movie)
            <li>{{$movie->title}}</li>
            @endforeach

        </ul>
        
    </div>
</body>
</html>