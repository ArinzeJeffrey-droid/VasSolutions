<?php
namespace Modules\Showtime\Repository\Eloquent;

use Illuminate\Support\Facades\DB;
use Modules\Showtime\Entities\Showtime;
use Modules\Showtime\Repository\ShowtimeRepositoryInterface;

class ShowtimeRepository implements ShowtimeRepositoryInterface {

    public function all()
    {
        return Showtime::all();
    }


    public function show($id){
        $showtime = DB::table('showtimes')
        ->join('movies', 'movies.id', '=', 'showtimes.movieId')
        ->select('*')->where('movieId', '=', $id)
        ->first();
        return $showtime;
    }
}