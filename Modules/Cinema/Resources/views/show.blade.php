@extends('layouts.app')

@section('content')
<div style="background-image: url('{{asset('images/'.$cinema->image) }}')" class="header row align-items-center justify-content-center">
    <h1 class="text-center cinema-name">{{$cinema->cinemaName}}</h1>
</div>
@if (count($cinema->moviesPlaying) == 0)
    <div class="text-center mt-5">
        <h1>No movies currently playing...</h1>
        <a href="{{ route('add_movie', $cinema->id)}}" class="btn btn-primary">Add movie</a>
    </div>
@else
<a href="{{ route('add_movie', $cinema->id)}}" class="btn btn-primary mt-1">Add movie</a>
@foreach ($cinema->moviesPlaying as $movie)
    <div class="row mt-5 justify-content-center">
        <div class="col-md-3 m-box mr-3 mb-2">
            <div class="row">
                <div class="col-md-6 det-box">
                    <img src="{{ asset('images/'.$movie->movieImage) }}" alt="">
                </div>
                <div class="text-center col-md-6 det-box flexi">
                    <div class="det-inner">
                    <h4 class="mt-4">{{$movie->movieName}}</h4>
                    <p>Genre: {{$movie->genre}}</p>
                    <a href="{{ route('view_showtime', $movie->id)}}" class="btn btn-primary">view showtimes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
@endif



@endsection