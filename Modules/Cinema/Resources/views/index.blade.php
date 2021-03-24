@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        @foreach ($cinemas as $cinema)
            <div class="col-md-3 mr-3 text-center box">
                <div class="box-img">
                    <img src="{{ asset('images/'.$cinema->image) }}" alt="">
                </div>
                <h3 class="text-center text-muted">{{$cinema->cinemaName}}</h3>
                <p class="text-muted">See movies currently showing...</p>
                <a href="{{ route('view_cinema', $cinema->id) }}" class="btn btn-info mt-2">View cinema</a>
            </div>
        @endforeach
    </div>
</div>
@endsection
