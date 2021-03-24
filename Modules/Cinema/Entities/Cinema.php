<?php

namespace Modules\Cinema\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Movie\Entities\Movie;

class Cinema extends Model
{
    use HasFactory;

    protected $fillable = [
        "cinemaName",
        "address",
        "image"
    ];

    public function moviesPlaying(){
        return $this->hasMany(Movie::class);
    }
    
    protected static function newFactory()
    {
        return \Modules\Cinema\Database\factories\CinemaFactory::new();
    }
}
