@extends('layouts/app')

@section('title')
    Laravel Movie Database
@endsection

@section('content')

    <main class="container py-5">

        <h2>Tutti i film del nostro database:</h2>

        <div id="movies">
            @foreach ($movies as $movie)
            <div class="single-movie">

                <img src="https://media.istockphoto.com/id/1396814518/vector/image-coming-soon-no-photo-no-thumbnail-image-available-vector-illustration.jpg?s=612x612&w=0&k=20&c=hnh2OZgQGhf0b46-J2z7aHbIWwq8HNlSDaNp2wn_iko=" alt="immagine mancante">
                <div>
                    {{$movie->title}}
                </div>
                <div>
                    <strong class="text-black">VOTO:</strong>
                    {{$movie->vote}}
                </div>
                <div>
                    <strong class="text-black">USCITA:</strong>
                    {{$movie->date}}
                </div>
                <div class="mb-4">
                    <strong class="text-black">NAZIONE:</strong>
                    {{$movie->nationality}}
                </div>
    
            </div>
            @endforeach
        </div>

    </main>

@endsection