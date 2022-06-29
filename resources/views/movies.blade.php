@extends('layout.movie')

@section('title','Movies')

    @section('content')

    <div class="containerCard">
    @foreach ($movies as $movie )
        <div class="card">
            <h4>{{$movie->title}}</h4>
            <p>titolo originale: {{$movie->original_title}}</p>
            <p>Nazionalità: {{$movie->nationality}}</p>
            <p>Data: {{$movie->date}}</p>
            <p>Voto: {{$movie->vote}}</p>
        </div>
    @endforeach
    </div>

@endsection
