<?php

namespace Modules\Showtime\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Showtime extends Model
{
    use HasFactory;

    protected $fillable = [
        'cinemaId',
        'movieId',
        'showtimeMorning',
        'showtimeNoon',
        'showtimeEvening'
    ];
    
    protected static function newFactory()
    {
        return \Modules\Showtime\Database\factories\ShowtimeFactory::new();
    }
}
