@extends('layouts.app')

@section('content')
    <div class="row mt-5 justify-content-center">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('images/'.$showtime->movieImage) }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$showtime->movieName}} <span class="font-weight-light">{{$showtime->genre}}</span></h5>
                <p class="font-weight-light">Showtime morning: {{$showtime->showtimeMorning}}AM</p>
                <p class="font-weight-light">Showtime noon: {{$showtime->showtimeNoon}}PM</p>
                <p class="font-weight-light">Showtime evening: {{$showtime->showtimeEvening}}PM</p>
            </div>
        </div>
    </div>
@endsection