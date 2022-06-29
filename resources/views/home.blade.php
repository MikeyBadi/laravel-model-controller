@extends('layout.movie')


@section('title', 'Home')

@section('content')
<div class="description">
    <h1>Guarda i migliori film sul mercato!</h1>
    <h3>Film consigliati di oggi:</h3>
</div>
    <div class="containerCard">

        @foreach ($good_movies as $good)
            <div class="card">
                <h4>{{$good->title}}</h4>
                <p>titolo originale: {{$good->original_title}}</p>
                <p>Nazionalità: {{$good->nationality}}</p>
                <p>Data: {{$good->date}}</p>
                <p>Voto: {{$good->vote}}</p>
            </div>
        @endforeach
        </div>
@endsection
