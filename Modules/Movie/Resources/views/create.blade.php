@extends('layouts.app')

@section('content')
<div class="wrapper">
    <form enctype="multipart/form-data" style="margin: auto" method="POST" class="col-md-6 mt-3 form-style" action="{{ route('save_movie') }}">
        <h3 class="text-center">Add Movie</h3>
        @csrf
        <div class="form-group row">    
            <label for="email" class="">{{ __('Movie Name') }}</label>
            <input id="email" type="text" class="form-control @error('movieName') is-invalid @enderror" name="movieName" required autofocus>
            @error('movieName')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    
        <div class="form-group row">
            <label for="movieImage" class="">{{ __('Movie Image') }}</label>
            <input id="movieImage" type="file" class="form-control @error('movieImage') is-invalid @enderror" name="movieImage">
            @error('movieImage')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    
        <div class="form-group row">
            <label for="password" class="">{{ __('Release Date') }}</label>
            <input id="password" type="date" class="form-control @error('releaseDate') is-invalid @enderror" name="releaseDate" required>
            @error('releaseDate')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group row">
            <label for="password" class="">{{ __('Genre') }}</label>
            <input id="password" type="text" class="form-control @error('genre') is-invalid @enderror" name="genre" required>
            @error('genre')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group row">
            <label for="password" class="">{{ __('Showtime Morning') }}</label>
            <input id="password" type="time" class="form-control @error('showtimeMorning') is-invalid @enderror" name="showtimeMorning" required>
            @error('showtimeMorning')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group row">
            <label for="password" class="">{{ __('Showtime Noon') }}</label>
            <input id="password" type="time" class="form-control @error('showtimeNoon') is-invalid @enderror" name="showtimeNoon" required>
            @error('showtimeNoon')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group row">
            <label for="password" class="">{{ __('Showtime Evening') }}</label>
            <input id="password" type="time" class="form-control @error('showtimeEvening') is-invalid @enderror" name="showtimeEvening" required>
            @error('showtimeNoon')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <input hidden id="password" type="text" class="form-control @error('cinemaId') is-invalid @enderror" value="{{ request()->route('id') }}" name="cinemaId">
        <div class="form-group row mb-0">
            <button type="submit" class="btn btn-primary">
                {{ __('Add Movie') }}
            </button>
        </div>
    </form>
</div>
@endsection
