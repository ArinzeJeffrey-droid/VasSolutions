<?php

namespace Modules\Movie\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Cinema\Entities\Cinema;
use Modules\Showtime\Entities\Showtime;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'movieName',
        'releaseDate',
        'movieImage',
        'cinema_id'
    ];
    

    public function cinemaPlayingAt(){
        return $this->belongsTo(Cinema::class);
    }
    

    static public function getShowTimes($id) {
        return Showtime::where('movieId', $id)->first();
    }

    protected static function newFactory()
    {
        return \Modules\Movie\Database\factories\MovieFactory::new();
    }
}
